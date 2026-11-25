<?php

namespace Tests\Feature;

use App\Models\Fasilitas;
use App\Models\Foto;
use App\Models\Kategori;
use App\Models\Laporan;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class FasilitasQuWorkflowsTest extends TestCase
{
    use RefreshDatabase;

    private function user(string $role): User
    {
        return User::factory()->create(['role' => $role]);
    }

    private function category(): Kategori
    {
        return Kategori::create([
            'name' => 'Fasilitas Umum',
            'severity_weight' => 3,
        ]);
    }

    private function facility(?Kategori $category = null): Fasilitas
    {
        $category ??= $this->category();

        return Fasilitas::create([
            'category_id' => $category->id,
            'name' => 'Lampu Koridor',
            'building' => 'Gedung A',
            'condition_status' => 'rusak',
        ]);
    }

    private function report(User $owner, Fasilitas $facility, array $attributes = []): Laporan
    {
        return Laporan::create(array_merge([
            'user_id' => $owner->id,
            'facility_id' => $facility->id,
            'description' => 'Lampu koridor tidak menyala.',
            'status' => 'menunggu_verifikasi',
        ], $attributes));
    }

    public function test_login_checks_role_and_logout_invalidates_session(): void
    {
        foreach (['masyarakat', 'admin', 'petugas', 'koordinator'] as $role) {
            $user = $this->user($role);

            $this->post(route('login.process'), [
                'email' => $user->email,
                'password' => 'password',
                'login_as' => $role,
            ])->assertRedirect(route('dashboard'));

            $this->assertAuthenticatedAs($user);
            $this->get(route('dashboard'))->assertRedirect(route('dashboard.' . $role));
            $this->post(route('logout'))->assertRedirect(route('login'));
            $this->assertGuest();
        }

        $user = $this->user('admin');
        $this->from(route('login'))->post(route('login.process'), [
            'email' => $user->email,
            'password' => 'password',
            'login_as' => 'petugas',
        ])->assertSessionHasErrors('email');
    }

    public function test_category_crud_validation_and_in_use_protection(): void
    {
        $admin = $this->user('admin');
        $this->actingAs($admin)->post(route('admin.categories.store'), [
            'name' => 'Toilet', 'severity_weight' => 4,
        ])->assertRedirect(route('admin.categories.index'));

        $category = Kategori::where('name', 'Toilet')->firstOrFail();
        $this->get(route('admin.categories.index'))
            ->assertOk()
            ->assertSee('dashboard-sidebar')
            ->assertSee('data-table')
            ->assertSee('Toilet');
        $this->get(route('admin.categories.edit', $category))
            ->assertOk()
            ->assertSee('Simpan Perubahan')
            ->assertSee('name="severity_weight"', false);

        $this->put(route('admin.categories.update', $category), [
            'name' => 'Sanitasi', 'severity_weight' => 5,
        ])->assertRedirect(route('admin.categories.index'));
        $this->assertDatabaseHas('categories', ['id' => $category->id, 'name' => 'Sanitasi']);

        $facility = $this->facility($category);
        $unusedCategory = Kategori::create([
            'name' => 'Kategori Kosong',
            'severity_weight' => 2,
        ]);
        $this->delete(route('admin.categories.destroy', $category))
            ->assertSessionHasErrors('category');
        $this->assertDatabaseHas('categories', ['id' => $category->id]);

        $this->delete(route('admin.categories.destroy', $unusedCategory));
        $this->assertDatabaseMissing('categories', ['id' => $unusedCategory->id]);
        $this->assertDatabaseHas('facilities', ['id' => $facility->id]);
    }

    public function test_facility_crud_rejects_unknown_condition_and_protects_reported_facility(): void
    {
        $admin = $this->user('admin');
        $category = $this->category();
        $payload = [
            'category_id' => $category->id,
            'name' => 'Kursi Kelas',
            'building' => 'Gedung B',
            'condition_status' => 'rusak',
        ];

        $this->actingAs($admin)->post(route('admin.facilities.store'), $payload)
            ->assertRedirect(route('admin.facilities.index'));
        $facility = Fasilitas::where('name', 'Kursi Kelas')->firstOrFail();

        $this->put(route('admin.facilities.update', $facility), array_merge($payload, [
            'name' => 'Kursi Ruang Kelas', 'condition_status' => 'perlu dicek',
        ]))->assertSessionHasErrors('condition_status');

        $this->report($this->user('masyarakat'), $facility);
        $this->delete(route('admin.facilities.destroy', $facility))
            ->assertSessionHasErrors('facility');
        $this->assertDatabaseHas('facilities', ['id' => $facility->id]);
    }

    public function test_citizen_report_creation_stores_private_photo_and_initial_log(): void
    {
        Storage::fake('private');
        $citizen = $this->user('masyarakat');
        $facility = $this->facility();

        $response = $this->actingAs($citizen)->post(route('reports.store'), [
            'facility_id' => $facility->id,
            'description' => 'Kran air bocor di dekat pintu.',
            'photos' => [UploadedFile::fake()->image('bukti.jpg')],
        ]);
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();
        $this->assertDatabaseCount('reports', 1);

        $report = Laporan::firstOrFail();
        $photo = $report->photos()->firstOrFail();
        $response->assertRedirect(route('reports.show', $report));
        $this->assertSame('menunggu_verifikasi', $report->status);
        Storage::disk('private')->assertExists($photo->file_path);
        $this->assertDatabaseHas('report_status_logs', [
            'report_id' => $report->id,
            'old_status' => null,
            'new_status' => 'menunggu_verifikasi',
            'changed_by' => $citizen->id,
        ]);
    }

    public function test_report_form_handles_empty_facilities_and_prefills_requested_facility(): void
    {
        $citizen = $this->user('masyarakat');
        $this->actingAs($citizen)->get(route('reports.create'))
            ->assertOk()
            ->assertSee('Belum ada fasilitas yang tersedia untuk dilaporkan.')
            ->assertSee('hubungi admin atau tunggu fasilitas ditambahkan')
            ->assertSee('disabled', false);

        $facility = $this->facility();
        $this->get(route('reports.create', ['facility_id' => $facility->id]))
            ->assertOk()
            ->assertSee('value="' . $facility->id . '" selected', false);
    }

    public function test_report_creation_validates_description_and_photo_count_format_and_size(): void
    {
        Storage::fake('private');
        $citizen = $this->user('masyarakat');
        $facility = $this->facility();
        $base = ['facility_id' => $facility->id];

        $this->actingAs($citizen)->from('/reports/create')->post(route('reports.store'), array_merge($base, [
            'description' => 'pendek',
        ]))->assertSessionHasErrors('description');
        $this->post(route('reports.store'), array_merge($base, [
            'description' => str_repeat('a', 1001),
        ]))->assertSessionHasErrors('description');

        $valid = ['description' => 'Kondisi fasilitas perlu segera diperiksa.'];
        $tooManyPhotos = array_fill(0, 6, UploadedFile::fake()->image('photo.jpg'));
        $this->post(route('reports.store'), array_merge($base, $valid, ['photos' => $tooManyPhotos]))
            ->assertSessionHasErrors('photos');

        $this->post(route('reports.store'), array_merge($base, $valid, [
            'photos' => [UploadedFile::fake()->create('dokumen.pdf', 10, 'application/pdf')],
        ]))->assertSessionHasErrors('photos.0');
        $this->post(route('reports.store'), array_merge($base, $valid, [
            'photos' => [UploadedFile::fake()->image('besar.jpg')->size(5121)],
        ]))->assertSessionHasErrors('photos.0');

        $this->assertDatabaseCount('reports', 0);
        $this->assertDatabaseCount('photos', 0);
    }

    public function test_admin_can_reject_report_with_reason_and_rejection_cannot_be_assigned_or_progressed(): void
    {
        $admin = $this->user('admin');
        $citizen = $this->user('masyarakat');
        $petugas = $this->user('petugas');
        $report = $this->report($citizen, $this->facility());

        $this->actingAs($admin)->post(route('admin.reports.verify', $report), [
            'decision' => 'ditolak', 'rejection_reason' => 'Bukti tidak menunjukkan kerusakan.',
        ])->assertRedirect(route('reports.show', $report));

        $report->refresh();
        $this->assertSame('ditolak', $report->status);
        $this->assertSame('Bukti tidak menunjukkan kerusakan.', $report->rejection_reason);
        $this->assertDatabaseHas('report_status_logs', [
            'report_id' => $report->id, 'changed_by' => $admin->id,
            'old_status' => 'menunggu_verifikasi', 'new_status' => 'ditolak',
            'note' => $report->rejection_reason,
        ]);

        $this->post(route('admin.reports.assign', $report), ['assigned_to' => $petugas->id])
            ->assertSessionHasErrors('assigned_to');
        $this->actingAs($petugas)->post(route('reports.progress', $report), [
            'note' => 'Perbaikan telah dilakukan.',
        ])->assertForbidden();

        $report->refresh();
        $this->assertSame('ditolak', $report->status);
        $this->assertNull($report->assigned_to);
        $this->assertSame(1, $report->statusLogs()->count());
    }

    public function test_admin_rejection_requires_a_valid_reason_and_report_can_only_be_verified_once(): void
    {
        $admin = $this->user('admin');
        $report = $this->report($this->user('masyarakat'), $this->facility());

        $this->actingAs($admin)->post(route('admin.reports.verify', $report), [
            'decision' => 'ditolak',
        ])->assertSessionHasErrors('rejection_reason');
        $this->post(route('admin.reports.verify', $report), [
            'decision' => 'ditolak', 'rejection_reason' => 'no',
        ])->assertSessionHasErrors('rejection_reason');
        $this->assertSame('menunggu_verifikasi', $report->fresh()->status);
        $this->assertSame(0, $report->statusLogs()->count());

        $this->post(route('admin.reports.verify', $report), [
            'decision' => 'terverifikasi', 'damage_level' => 3,
        ])->assertRedirect(route('reports.show', $report));
        $this->post(route('admin.reports.verify', $report), [
            'decision' => 'ditolak', 'rejection_reason' => 'Alasan penolakan yang valid',
        ])->assertSessionHasErrors('decision');
        $this->assertSame('terverifikasi', $report->fresh()->status);
        $this->assertSame(1, $report->statusLogs()->count());
    }

    public function test_only_assigned_petugas_can_update_progress_and_unauthorized_roles_cannot_run_workflow_actions(): void
    {
        $admin = $this->user('admin');
        $citizen = $this->user('masyarakat');
        $assigned = $this->user('petugas');
        $otherPetugas = $this->user('petugas');
        $report = $this->report($citizen, $this->facility(), [
            'status' => 'dalam_penanganan', 'assigned_to' => $assigned->id,
        ]);

        $this->actingAs($otherPetugas)->post(route('reports.progress', $report), [
            'note' => 'Pekerjaan sudah diselesaikan.',
        ])->assertForbidden();
        $this->assertSame('dalam_penanganan', $report->fresh()->status);
        $this->assertSame(0, $report->statusLogs()->count());

        foreach ([$citizen, $assigned, $this->user('koordinator')] as $notAdmin) {
            $this->actingAs($notAdmin)->post(route('admin.reports.verify', $report), [
                'decision' => 'terverifikasi', 'damage_level' => 3,
            ])->assertForbidden();
            $this->post(route('admin.reports.assign', $report), ['assigned_to' => $assigned->id])
                ->assertForbidden();
        }

        $this->post(route('reports.store'), [
            'facility_id' => $report->facility_id,
            'description' => 'Pelaporan sebagai petugas tidak diperbolehkan.',
        ])->assertForbidden();

        auth()->logout();
        $this->post(route('admin.reports.verify', $report), [
            'decision' => 'terverifikasi', 'damage_level' => 3,
        ])->assertRedirect(route('login'));
        $this->post(route('reports.progress', $report), ['note' => 'Selesai dilakukan.'])
            ->assertRedirect(route('login'));
        $this->assertSame('dalam_penanganan', $report->fresh()->status);
        $this->assertSame(0, $report->statusLogs()->count());
    }

    public function test_citizen_cannot_view_another_users_report(): void
    {
        $owner = $this->user('masyarakat');
        $otherCitizen = $this->user('masyarakat');
        $report = $this->report($owner, $this->facility());

        $this->actingAs($otherCitizen)->get(route('reports.show', $report))->assertForbidden();
        $this->assertDatabaseHas('reports', ['id' => $report->id, 'user_id' => $owner->id]);
    }

    public function test_admin_verification_assignment_and_assigned_petugas_completion_are_logged(): void
    {
        $admin = $this->user('admin');
        $citizen = $this->user('masyarakat');
        $petugas = $this->user('petugas');
        $report = $this->report($citizen, $this->facility());

        $this->actingAs($admin)->get(route('admin.reports.index'))
            ->assertOk()
            ->assertSee('dashboard-sidebar')
            ->assertSee('Semua Laporan')
            ->assertSee('Belum ditugaskan');

        $this->actingAs($admin)->post(route('admin.reports.verify', $report), [
            'decision' => 'terverifikasi', 'damage_level' => 3,
        ])->assertRedirect(route('reports.show', $report));
        $this->get(route('admin.reports.index'))
            ->assertOk()
            ->assertSee($petugas->name)
            ->assertSee('Pilih petugas');
        $this->post(route('admin.reports.assign', $report), [
            'assigned_to' => $petugas->id,
        ])->assertRedirect(route('admin.reports.index'));

        $this->actingAs($petugas)->post(route('reports.progress', $report), [
            'note' => 'Lampu sudah diganti dan menyala normal.',
        ])->assertRedirect(route('reports.show', $report));

        $this->assertDatabaseHas('reports', [
            'id' => $report->id,
            'assigned_to' => $petugas->id,
            'status' => 'selesai',
        ]);
        $this->assertDatabaseHas('report_status_logs', [
            'report_id' => $report->id,
            'changed_by' => $admin->id,
            'old_status' => 'menunggu_verifikasi',
            'new_status' => 'terverifikasi',
        ]);
        $this->assertDatabaseHas('report_status_logs', [
            'report_id' => $report->id,
            'changed_by' => $admin->id,
            'old_status' => 'terverifikasi',
            'new_status' => 'dalam_penanganan',
        ]);
        $this->assertDatabaseHas('report_status_logs', [
            'report_id' => $report->id,
            'changed_by' => $petugas->id,
            'old_status' => 'dalam_penanganan',
            'new_status' => 'selesai',
        ]);
    }

    public function test_private_photo_access_follows_report_roles_and_denies_guests_and_other_users(): void
    {
        Storage::fake('private');
        $owner = $this->user('masyarakat');
        $assigned = $this->user('petugas');
        $facility = $this->facility();
        $report = $this->report($owner, $facility, ['assigned_to' => $assigned->id]);
        $path = UploadedFile::fake()->image('evidence.jpg')->store('reports', 'private');
        $photo = $report->photos()->create(['file_path' => $path]);
        $url = route('reports.photos.show', [$report, $photo]);

        $this->actingAs($owner)->get(route('reports.show', $report))
            ->assertOk()
            ->assertSee('report-detail-layout')
            ->assertSee('Foto bukti')
            ->assertDontSee('container-fluid');

        $this->post(route('logout'));
        $this->get($url)->assertRedirect(route('login'));
        foreach ([$owner, $this->user('admin'), $assigned, $this->user('koordinator')] as $allowed) {
            $response = $this->actingAs($allowed)->get($url)->assertOk();
            $this->assertStringContainsString('private', $response->headers->get('Cache-Control'));
            $this->assertStringContainsString('no-store', $response->headers->get('Cache-Control'));
            $this->assertStringContainsString('max-age=0', $response->headers->get('Cache-Control'));
            $response->assertHeader('X-Content-Type-Options', 'nosniff');
        }

        $this->actingAs($this->user('masyarakat'))->get($url)->assertForbidden();
        $this->actingAs($this->user('petugas'))->get($url)->assertForbidden();
    }

    public function test_private_report_photo_is_not_available_at_public_storage_url_or_exposes_its_path(): void
    {
        Storage::fake('private');
        Storage::fake('public');
        $owner = $this->user('masyarakat');
        $report = $this->report($owner, $this->facility());
        $path = UploadedFile::fake()->image('private-evidence.jpg')->store('reports', 'private');
        $photo = $report->photos()->create(['file_path' => $path]);
        $publicUrl = '/storage/' . $path;

        Storage::disk('private')->assertExists($path);
        Storage::disk('public')->assertMissing($path);
        $this->get($publicUrl)->assertClientError();

        $detail = $this->actingAs($owner)->get(route('reports.show', $report))->assertOk();
        $detail->assertDontSee($path);
        $detail->assertDontSee(Storage::disk('private')->path($path));

        $photoResponse = $this->get(route('reports.photos.show', [$report, $photo]))->assertOk();
        $responseText = $photoResponse->getContent() . json_encode($photoResponse->headers->all());
        $this->assertStringNotContainsString($path, $responseText);
        $this->assertStringNotContainsString(Storage::disk('private')->path($path), $responseText);
    }

    public function test_missing_or_mismatched_report_photo_resources_return_not_found(): void
    {
        Storage::fake('private');
        $owner = $this->user('masyarakat');
        $category = $this->category();
        $report = $this->report($owner, $this->facility($category));
        $otherReport = $this->report($owner, $this->facility($category));
        $path = UploadedFile::fake()->image('evidence.jpg')->store('reports', 'private');
        $photo = $report->photos()->create(['file_path' => $path]);
        $missingFilePhoto = $otherReport->photos()->create(['file_path' => 'reports/missing.jpg']);

        $this->actingAs($owner)->get(route('reports.photos.show', [$report, 999999]))->assertNotFound();
        $this->get(route('reports.photos.show', [$otherReport, $photo]))->assertNotFound();
        $this->get(route('reports.photos.show', [$otherReport, $missingFilePhoto]))->assertNotFound();
    }

    public function test_non_admin_cannot_open_admin_routes_and_citizen_dashboard_uses_database_content(): void
    {
        $citizen = $this->user('masyarakat');
        $facility = $this->facility();
        $report = $this->report($citizen, $facility);

        $this->actingAs($citizen)->get(route('admin.categories.index'))->assertForbidden();
        $this->get(route('dashboard.masyarakat'))
            ->assertOk()
            ->assertSee($facility->name)
            ->assertSee('#' . $report->id)
            ->assertDontSee('LP-2026-0008');
    }

    public function test_citizen_dashboard_shows_only_own_reports_and_own_status_statistics(): void
    {
        $citizen = $this->user('masyarakat');
        $otherCitizen = $this->user('masyarakat');
        $facility = $this->facility();
        $this->report($citizen, $facility, ['description' => 'Laporan warga menunggu verifikasi.', 'status' => 'menunggu_verifikasi']);
        $this->report($citizen, $facility, ['description' => 'Laporan warga dalam penanganan.', 'status' => 'dalam_penanganan']);
        $this->report($citizen, $facility, ['description' => 'Laporan warga sudah selesai.', 'status' => 'selesai']);
        $this->report($otherCitizen, $facility, ['description' => 'Rahasia laporan warga lain.', 'status' => 'menunggu_verifikasi']);

        $response = $this->actingAs($citizen)->get(route('dashboard.masyarakat'))->assertOk();
        $response->assertViewHas('totalReports', 3);
        $response->assertViewHas('pendingReports', 1);
        $response->assertViewHas('inProgressReports', 1);
        $response->assertViewHas('completedReports', 1);
        $response->assertSee('Laporan warga menunggu verifikasi.')
            ->assertSee('Laporan warga dalam penanganan.')
            ->assertSee('Laporan warga sudah selesai.')
            ->assertDontSee('Rahasia laporan warga lain.');
    }

    public function test_admin_dashboard_shows_database_report_and_facility_totals_and_status_counts(): void
    {
        $admin = $this->user('admin');
        $citizen = $this->user('masyarakat');
        $category = $this->category();
        $facility = $this->facility($category);
        $secondFacility = Fasilitas::create([
            'category_id' => $category->id,
            'name' => 'Pintu Gedung B',
            'building' => 'Gedung B',
            'condition_status' => 'baik',
        ]);

        foreach (['menunggu_verifikasi', 'terverifikasi', 'dalam_penanganan', 'selesai', 'ditolak'] as $status) {
            $this->report($citizen, $facility, ['status' => $status]);
        }

        $response = $this->actingAs($admin)->get(route('dashboard.admin'))->assertOk();
        $response->assertViewHas('totalReports', 5);
        $response->assertViewHas('totalFacilities', 2);
        $response->assertViewHas('pendingReports', 1);
        $response->assertViewHas('verifiedReports', 1);
        $response->assertViewHas('inProgressReports', 1);
        $response->assertViewHas('completedReports', 1);
        $response->assertViewHas('rejectedReports', 1);
        $response->assertSeeText('Saat ini terdapat 5 laporan dan 2 fasilitas terdaftar.');
        $this->assertSame('Pintu Gedung B', $secondFacility->fresh()->name);
    }

    public function test_petugas_dashboard_shows_only_assigned_tasks_and_own_status_counts(): void
    {
        $petugas = $this->user('petugas');
        $otherPetugas = $this->user('petugas');
        $citizen = $this->user('masyarakat');
        $facility = $this->facility();

        $this->report($citizen, $facility, ['description' => 'Tugas baru petugas ini.', 'status' => 'terverifikasi', 'assigned_to' => $petugas->id]);
        $this->report($citizen, $facility, ['description' => 'Tugas aktif petugas ini.', 'status' => 'dalam_penanganan', 'assigned_to' => $petugas->id]);
        $this->report($citizen, $facility, ['description' => 'Tugas selesai petugas ini.', 'status' => 'selesai', 'assigned_to' => $petugas->id]);
        $this->report($citizen, $facility, ['description' => 'Tugas milik petugas lain.', 'status' => 'dalam_penanganan', 'assigned_to' => $otherPetugas->id]);
        $this->report($citizen, $facility, ['description' => 'Laporan tanpa penugasan.', 'status' => 'menunggu_verifikasi']);

        $response = $this->actingAs($petugas)->get(route('dashboard.petugas'))->assertOk();
        $response->assertViewHas('totalAssignedReports', 3);
        $response->assertViewHas('verifiedReports', 1);
        $response->assertViewHas('inProgressReports', 1);
        $response->assertViewHas('completedReports', 1);
        $response->assertSee('Tugas baru petugas ini.')
            ->assertSee('Tugas aktif petugas ini.')
            ->assertDontSee('Tugas milik petugas lain.')
            ->assertDontSee('Laporan tanpa penugasan.');
    }

    public function test_coordinator_dashboard_monitoring_statistics_match_database(): void
    {
        $coordinator = $this->user('koordinator');
        $citizen = $this->user('masyarakat');
        $category = $this->category();
        $broken = $this->facility($category);
        Fasilitas::create([
            'category_id' => $category->id,
            'name' => 'Meja Perpustakaan',
            'building' => 'Perpustakaan',
            'condition_status' => 'baik',
        ]);
        Fasilitas::create([
            'category_id' => $category->id,
            'name' => 'Toilet Gedung C',
            'building' => 'Gedung C',
            'condition_status' => 'dalam_perbaikan',
        ]);
        $this->report($citizen, $broken, ['status' => 'menunggu_verifikasi']);
        $this->report($citizen, $broken, ['status' => 'terverifikasi']);
        $this->report($citizen, $broken, ['status' => 'dalam_penanganan']);
        $this->report($citizen, $broken, ['status' => 'selesai']);
        $this->report($citizen, $broken, ['status' => 'ditolak']);

        $response = $this->actingAs($coordinator)->get(route('dashboard.koordinator'))->assertOk();
        $response->assertViewHas('totalReports', 5);
        $response->assertViewHas('totalFacilities', 3);
        $response->assertViewHas('pendingReports', 1);
        $response->assertViewHas('verifiedReports', 1);
        $response->assertViewHas('inProgressReports', 1);
        $response->assertViewHas('completedReports', 1);
        $response->assertViewHas('rejectedReports', 1);
        $response->assertViewHas('facilityConditionCounts', function ($counts): bool {
            return (int) $counts['baik'] === 1
                && (int) $counts['rusak'] === 1
                && (int) $counts['dalam_perbaikan'] === 1;
        });
        $response->assertSeeText('Saat ini terdapat 5 laporan');
        $response->assertSee('3 fasilitas terdata');
    }

    public function test_all_role_dashboards_render_when_reports_and_facilities_are_empty(): void
    {
        foreach ([
            ['masyarakat', 'dashboard.masyarakat'],
            ['admin', 'dashboard.admin'],
            ['petugas', 'dashboard.petugas'],
            ['koordinator', 'dashboard.koordinator'],
        ] as [$role, $routeName]) {
            $response = $this->actingAs($this->user($role))->get(route($routeName))->assertOk();
            $response->assertViewHas('reports', fn ($reports) => $reports->isEmpty());
        }

        $this->assertDatabaseCount('reports', 0);
        $this->assertDatabaseCount('facilities', 0);
    }
}
