<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreReportRequest;
use App\Models\Fasilitas;
use App\Models\Foto;
use App\Models\Laporan;
use App\Services\ReportService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class ReportController extends Controller
{
    public function __construct(
        private readonly ReportService $reportService
    ) {}

    /**
     * Daftar laporan masyarakat atau petugas.
     */
    public function index(Request $request)
    {
        $reports = $this->reportService->getAllReports(
            Auth::user(),
            $request->only(['status', 'facility_id'])
        );

        return view('reports.index', compact('reports'));
    }

    /**
     * Daftar seluruh laporan untuk Admin.
     */
    public function adminIndex(Request $request)
    {
        $query = Laporan::with([
            'user:id,name,email',
            'fasilitas',
            'assignedTo:id,name',
        ]);

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $reports = $query->latest()->paginate(10)->withQueryString();

        $pendingReports = Laporan::where(
            'status',
            'menunggu_verifikasi'
        )->count();

        $petugas = User::where('role', 'petugas')
            ->orderBy('name')
            ->get(['id', 'name']);

        return view('reports.admin-index', compact(
            'reports',
            'petugas',
            'pendingReports'
        ));
    }

    /**
     * Form membuat laporan.
     */
    public function create(Request $request)
    {
        $facilities = Fasilitas::with('kategori')
            ->orderBy('name')
            ->get();

        $selectedFacilityId = $request->query('facility_id');

        return view('reports.create', compact(
            'facilities',
            'selectedFacilityId'
        ));
    }

    /**
     * Simpan laporan masyarakat.
     */
    public function store(StoreReportRequest $request)
    {
        $report = $this->reportService->createReport(
            Auth::user(),
            $request->validated()
        );

        return redirect()
            ->route('reports.show', $report)
            ->with(
                'success',
                'Laporan berhasil dikirim dan menunggu verifikasi admin.'
            );
    }

    /**
     * Detail laporan.
     */
    public function show(Laporan $report)
    {
        $user = Auth::user();

        $this->authorizeReportAccess($user, $report);

        $report = $this->reportService->getReportById($report->id);

        return view('reports.show', compact('report'));
    }

    /**
     * Menampilkan foto laporan setelah memastikan akses ke laporan terkait.
     */
    public function showPhoto(Laporan $report, Foto $photo)
    {
        $photoReport = $photo->laporan()->firstOrFail();

        if ((int) $photoReport->id !== (int) $report->id) {
            abort(404);
        }

        $this->authorizeReportAccess(Auth::user(), $photoReport);

        $disk = Storage::disk('private');

        if (!$disk->exists($photo->file_path)) {
            abort(404);
        }

        $absolutePath = $disk->path($photo->file_path);
        $mimeType = File::mimeType($absolutePath);

        if (!in_array($mimeType, [
            'image/jpeg',
            'image/png',
            'image/webp',
        ], true)) {
            abort(404);
        }

        $response = response()->file($absolutePath, [
            'Content-Type' => $mimeType,
            'X-Content-Type-Options' => 'nosniff',
        ]);

        // Symfony may normalize file cache headers to public/no-store.
        // Set this after creating the file response to retain private caching.
        $response->headers->set(
            'Cache-Control',
            'private, no-store, max-age=0'
        );

        return $response;
    }

    /**
     * Terapkan aturan akses yang sama pada detail laporan dan foto laporan.
     */
    private function authorizeReportAccess(User $user, Laporan $report): void
    {
        if (
            $user->role === 'masyarakat'
            && (int) $report->user_id !== (int) $user->id
        ) {
            abort(403);
        }

        if (
            $user->role === 'petugas'
            && (int) $report->assigned_to !== (int) $user->id
        ) {
            abort(403);
        }
    }

    /**
     * Verifikasi atau tolak laporan oleh Admin.
     */
    public function verify(Request $request, Laporan $report)
    {
        $validated = $request->validate([
            'decision' => [
                'required',
                'in:terverifikasi,ditolak',
            ],

            'damage_level' => [
                'nullable',
                'required_if:decision,terverifikasi',
                'integer',
                'between:1,5',
            ],

            'rejection_reason' => [
                'nullable',
                'required_if:decision,ditolak',
                'string',
                'min:5',
                'max:1000',
            ],
        ], [
            'decision.required' =>
                'Silakan pilih keputusan verifikasi.',

            'damage_level.required_if' =>
                'Tingkat kerusakan wajib diisi.',

            'damage_level.between' =>
                'Tingkat kerusakan harus antara 1 sampai 5.',

            'rejection_reason.required_if' =>
                'Alasan penolakan wajib diisi.',

            'rejection_reason.min' =>
                'Alasan penolakan minimal 5 karakter.',
        ]);

        DB::transaction(function () use ($report, $validated) {

            $lockedReport = Laporan::whereKey($report->id)
                ->lockForUpdate()
                ->firstOrFail();

            if ($lockedReport->status !== 'menunggu_verifikasi') {
                throw ValidationException::withMessages([
                    'decision' =>
                        'Laporan ini sudah diproses dan tidak dapat diverifikasi kembali.',
                ]);
            }

            $oldStatus = $lockedReport->status;
            $newStatus = $validated['decision'];

            $lockedReport->status = $newStatus;
            $lockedReport->verified_by = Auth::id();
            $lockedReport->verified_at = now();

            if ($newStatus === 'terverifikasi') {

                $lockedReport->damage_level =
                    $validated['damage_level'];

                $lockedReport->rejection_reason = null;

                $note = 'Laporan telah diverifikasi oleh admin.';

            } else {

                $lockedReport->rejection_reason =
                    $validated['rejection_reason'];

                $note = $validated['rejection_reason'];
            }

            $lockedReport->save();

            $lockedReport->statusLogs()->create([
                'changed_by' => Auth::id(),
                'old_status' => $oldStatus,
                'new_status' => $newStatus,
                'note' => $note,
                'changed_at' => now(),
            ]);
        });

        $message = $validated['decision'] === 'terverifikasi'
            ? 'Laporan berhasil diverifikasi.'
            : 'Laporan berhasil ditolak.';

        return redirect()
            ->route('reports.show', $report->id)
            ->with('success', $message);
    }

    public function assign(Request $request, Laporan $report)
    {
        $validated = $request->validate([
            'assigned_to' => ['required', 'integer', 'exists:users,id'],
        ]);

        $petugas = User::whereKey($validated['assigned_to'])
            ->where('role', 'petugas')
            ->first();

        if (!$petugas) {
            throw ValidationException::withMessages([
                'assigned_to' => 'Pengguna yang dipilih bukan petugas.',
            ]);
        }

        DB::transaction(function () use ($report, $petugas) {
            $lockedReport = Laporan::whereKey($report->id)
                ->lockForUpdate()
                ->firstOrFail();

            if ($lockedReport->status !== 'terverifikasi') {
                throw ValidationException::withMessages([
                    'assigned_to' => 'Hanya laporan terverifikasi yang dapat ditugaskan.',
                ]);
            }

            $oldStatus = $lockedReport->status;

            $lockedReport->assigned_to = $petugas->id;
            $lockedReport->status = 'dalam_penanganan';
            $lockedReport->save();

            $lockedReport->statusLogs()->create([
                'changed_by' => Auth::id(),
                'old_status' => $oldStatus,
                'new_status' => 'dalam_penanganan',
                'note' => 'Laporan ditugaskan kepada petugas ' . $petugas->name . '.',
                'changed_at' => now(),
            ]);
        });

        return redirect()
            ->route('admin.reports.index')
            ->with('success', 'Laporan berhasil ditugaskan kepada petugas.');}
    public function updateProgress(Request $request, Laporan $report)
    {
        $validated = $request->validate([
            'note' => ['required', 'string', 'min:5', 'max:1000'],
        ], [
            'note.required' => 'Catatan hasil penanganan wajib diisi.',
            'note.min' => 'Catatan hasil penanganan minimal 5 karakter.',
            'note.max' => 'Catatan hasil penanganan maksimal 1000 karakter.',
        ]);

        DB::transaction(function () use ($report, $validated) {
            $lockedReport = Laporan::whereKey($report->id)
                ->lockForUpdate()
                ->firstOrFail();

            if ((int) $lockedReport->assigned_to !== (int) Auth::id()) {
                abort(403, 'Anda tidak ditugaskan untuk menangani laporan ini.');
            }

            if (!in_array($lockedReport->status, [
                'terverifikasi',
                'dalam_penanganan',
            ], true)) {
                throw ValidationException::withMessages([
                    'status' => 'Hanya laporan terverifikasi atau dalam penanganan yang dapat diselesaikan.',
                ]);
            }

            $oldStatus = $lockedReport->status;
            $newStatus = 'selesai';

            $lockedReport->status = $newStatus;
            $lockedReport->save();

            $lockedReport->statusLogs()->create([
                'changed_by' => Auth::id(),
                'old_status' => $oldStatus,
                'new_status' => $newStatus,
                'note' => $validated['note'],
                'changed_at' => now(),
            ]);
        });

        return redirect()
            ->route('reports.show', $report->id)
            ->with('success', 'Laporan berhasil ditandai selesai.');
    }
}
