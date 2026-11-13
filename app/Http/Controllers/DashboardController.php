<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Mengarahkan pengguna ke dashboard sesuai role.
     */
    public function index(Request $request)
    {
        $user = $request->user();

        return match ($user->role) {
            'masyarakat' => redirect()->route('dashboard.masyarakat'),
            'admin' => redirect()->route('dashboard.admin'),
            'petugas' => redirect()->route('dashboard.petugas'),
            'koordinator' => redirect()->route('dashboard.koordinator'),
            default => abort(403, 'Role pengguna tidak dikenali.'),
        };
    }

    /**
     * Mengambil data prioritas langsung dari tabel priorities.
     * Tidak menggunakan relasi Prioritas yang nama tabel
     * otomatisnya tidak sesuai dengan database.
     */
    private function attachPriorities($reports)
    {
        if ($reports->isEmpty()) {
            return $reports;
        }

        $priorities = DB::table('priorities')
            ->whereIn('report_id', $reports->pluck('id'))
            ->get()
            ->keyBy('report_id');

        foreach ($reports as $report) {
            $report->setAttribute(
                'priority',
                $priorities->get($report->id)
            );
        }

        return $reports;
    }

    /**
     * Dashboard masyarakat.
     * Hanya menampilkan laporan milik pengguna yang login.
     */
    public function masyarakat(Request $request)
    {
        $userId = $request->user()->id;

        $reports = Laporan::with([
            'fasilitas.kategori',
            'photos',
        ])
            ->where('user_id', $userId)
            ->latest()
            ->limit(3)
            ->get();

        $this->attachPriorities($reports);

        $totalReports = Laporan::where('user_id', $userId)->count();

        $pendingReports = Laporan::where('user_id', $userId)
            ->where('status', 'menunggu_verifikasi')
            ->count();

        $inProgressReports = Laporan::where('user_id', $userId)
            ->where('status', 'dalam_penanganan')
            ->count();

        $completedReports = Laporan::where('user_id', $userId)
            ->where('status', 'selesai')
            ->count();

        $facilities = Fasilitas::with('kategori')
            ->where('condition_status', '!=', 'baik')
            ->latest()
            ->limit(3)
            ->get();

        return view('dashboards.masyarakat.index', compact(
            'reports',
            'totalReports',
            'pendingReports',
            'inProgressReports',
            'completedReports',
            'facilities'
        ));
    }

    /**
     * Dashboard admin.
     * Menampilkan seluruh laporan dan fasilitas.
     */
    public function admin()
    {
        $reports = Laporan::with([
            'user',
            'fasilitas.kategori',
        ])
            ->latest()
            ->limit(10)
            ->get();

        $this->attachPriorities($reports);

        $totalReports = Laporan::count();

        $pendingReports = Laporan::where(
            'status',
            'menunggu_verifikasi'
        )->count();

        $verifiedReports = Laporan::where(
            'status',
            'terverifikasi'
        )->count();

        $inProgressReports = Laporan::where(
            'status',
            'dalam_penanganan'
        )->count();

        $completedReports = Laporan::where(
            'status',
            'selesai'
        )->count();

        $rejectedReports = Laporan::where(
            'status',
            'ditolak'
        )->count();

        $totalFacilities = Fasilitas::count();

        $verificationQueue = Laporan::with([
            'user',
            'fasilitas.kategori',
        ])
            ->where('status', 'menunggu_verifikasi')
            ->latest()
            ->limit(5)
            ->get();

        $topPriorities = Laporan::join(
            'priorities',
            'reports.id',
            '=',
            'priorities.report_id'
        )
            ->select('reports.*')
            ->with([
                'user',
                'fasilitas.kategori',
            ])
            ->orderByDesc('priorities.score')
            ->limit(5)
            ->get();

        $this->attachPriorities($topPriorities);

        return view('dashboards.admin.index', compact(
            'reports',
            'totalReports',
            'pendingReports',
            'verifiedReports',
            'inProgressReports',
            'completedReports',
            'rejectedReports',
            'totalFacilities',
            'verificationQueue',
            'topPriorities'
        ));}
    public function petugas(Request $request)
    {
        $userId = $request->user()->id;

        // Daftar tugas aktif milik petugas yang sedang login.
        // Urutan berdasarkan skor prioritas tertinggi.
        $reports = Laporan::query()
            ->leftJoin(
                'priorities',
                'reports.id',
                '=',
                'priorities.report_id'
            )
            ->with([
                'user',
                'fasilitas.kategori',
            ])
            ->where('reports.assigned_to', $userId)
            ->whereIn('reports.status', [
                'terverifikasi',
                'dalam_penanganan',
            ])
            ->select('reports.*')
            ->orderByRaw('priorities.score IS NULL ASC')
            ->orderByDesc('priorities.score')
            ->orderByDesc('reports.created_at')
            ->limit(10)
            ->get();

        // Lampirkan data prioritas dari tabel priorities.
        $this->attachPriorities($reports);

        // Tugas baru yang sudah diverifikasi dan ditugaskan.
        $verifiedReports = Laporan::where('assigned_to', $userId)
            ->where('status', 'terverifikasi')
            ->count();

        // Tugas yang sedang dikerjakan.
        $inProgressReports = Laporan::where('assigned_to', $userId)
            ->where('status', 'dalam_penanganan')
            ->count();

        // Tugas yang sudah selesai.
        $completedReports = Laporan::where('assigned_to', $userId)
            ->where('status', 'selesai')
            ->count();

        // Seluruh tugas yang pernah ditugaskan kepada petugas.
        $totalAssignedReports = Laporan::where('assigned_to', $userId)
            ->count();

        return view('dashboards.petugas.index', compact(
            'reports',
            'totalAssignedReports',
            'verifiedReports',
            'inProgressReports',
            'completedReports'
        ));
    }


    /**
     * Dashboard koordinator.
     * Menampilkan ringkasan seluruh laporan, prioritas,
     * dan kondisi fasilitas berdasarkan database.
     */
    public function koordinator()
    {
        $reports = Laporan::with([
            'user',
            'fasilitas.kategori',
            'assignedTo',
        ])
            ->latest()
            ->limit(5)
            ->get();

        $this->attachPriorities($reports);

        $totalReports = Laporan::count();

        $pendingReports = Laporan::where(
            'status',
            'menunggu_verifikasi'
        )->count();

        $verifiedReports = Laporan::where(
            'status',
            'terverifikasi'
        )->count();

        $inProgressReports = Laporan::where(
            'status',
            'dalam_penanganan'
        )->count();

        $completedReports = Laporan::where(
            'status',
            'selesai'
        )->count();

        $rejectedReports = Laporan::where(
            'status',
            'ditolak'
        )->count();

        $totalFacilities = Fasilitas::count();

        $facilityConditionCounts = Fasilitas::select(
            'condition_status'
        )
            ->selectRaw('COUNT(*) as total')
            ->groupBy('condition_status')
            ->pluck('total', 'condition_status');

        $priorityCounts = DB::table('priorities')
            ->select('level')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('level')
            ->pluck('total', 'level');

        // Jumlah laporan berdasarkan kategori fasilitas.
        $categoryReportCounts = DB::table('reports')
            ->join('facilities', 'reports.facility_id', '=', 'facilities.id')
            ->join('categories', 'facilities.category_id', '=', 'categories.id')
            ->select('categories.id', 'categories.name')
            ->selectRaw('COUNT(reports.id) as total')
            ->groupBy('categories.id', 'categories.name')
            ->orderByDesc('total')
            ->get();

        $topPriorities = Laporan::join(
            'priorities',
            'reports.id',
            '=',
            'priorities.report_id'
        )
            ->select('reports.*')
            ->with([
                'user',
                'fasilitas.kategori',
            ])
            ->orderByDesc('priorities.score')
            ->limit(5)
            ->get();

        $this->attachPriorities($topPriorities);

        return view('dashboards.koordinator.index', compact(
            'reports',
            'totalReports',
            'pendingReports',
            'verifiedReports',
            'inProgressReports',
            'completedReports',
            'rejectedReports',
            'totalFacilities',
            'facilityConditionCounts',
            'priorityCounts',
            'categoryReportCounts',
            'topPriorities'
        ));
    }
}
