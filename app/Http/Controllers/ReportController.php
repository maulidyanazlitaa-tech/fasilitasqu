<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\VerifyReportRequest;
use App\Models\Laporan;
use App\Models\User;
use App\Services\ReportService;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    protected ReportService $reportService;

    public function __construct(ReportService $reportService)
    {
        $this->reportService = $reportService;
    }

    // Daftar laporan.
    public function index(Request $request)
    {
        $user = $request->user();

        abort_unless(
            in_array($user->role, [
                'masyarakat',
                'admin',
                'petugas',
                'koordinator',
            ]),
            403,
            'Anda tidak memiliki akses.'
        );

        $reports = $this->reportService->getAllReports(
            $user,
            $request->only(['status', 'facility_id'])
        );

        return response()->json([
            'success' => true,
            'message' => 'Daftar laporan berhasil diambil.',
            'data' => $reports->items(),
            'meta' => [
                'current_page' => $reports->currentPage(),
                'last_page' => $reports->lastPage(),
                'per_page' => $reports->perPage(),
                'total' => $reports->total(),
            ],
        ]);
    }

    // Detail laporan.
    public function show(Request $request, Laporan $report)
    {
        $user = $request->user();

        $this->authorizeReportAccess($user, $report);

        $report = $this->reportService->getReportById(
            $report->id
        );

        return response()->json([
            'success' => true,
            'message' => 'Detail laporan berhasil diambil.',
            'data' => $report,
        ]);
    }

    // Membuat laporan baru.
    public function store(StoreReportRequest $request)
    {
        $report = $this->reportService->createReport(
            $request->user(),
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Laporan kerusakan berhasil dibuat.',
            'data' => $report,
        ], 201);
    }

    // Verifikasi atau penolakan laporan oleh admin.
    public function verify(
        VerifyReportRequest $request,
        Laporan $report
    ) {
        abort_unless(
            $request->user()->role === 'admin',
            403,
            'Hanya admin yang dapat memverifikasi laporan.'
        );

        $report->update($request->validated());
        $report->refresh();

        return response()->json([
            'success' => true,
            'message' => 'Verifikasi laporan berhasil diproses.',
            'data' => $report,
        ]);
    }

    // Pemeriksaan hak akses detail laporan.
    private function authorizeReportAccess(User $user, Laporan $report): void
    {
        if ($user->role === 'admin' || $user->role === 'koordinator') {
            return;
            }

        if (
            $user->role === 'masyarakat'
            && $report->user_id === $user->id
        ) {
            return;
        }

        if (
            $user->role === 'petugas'
            && $report->assigned_to === $user->id
        ) {
            return;
        }
        abort(403, 'Anda tidak memiliki akses ke laporan ini.');
        }
}