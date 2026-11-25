<?php

namespace App\Services;

use App\Models\Laporan;
use App\Models\User;
use App\Repositories\ReportRepository;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use RuntimeException;
use Throwable;

class ReportService
{
    protected ReportRepository $reportRepository;

    public function __construct(ReportRepository $reportRepository)
    {
        $this->reportRepository = $reportRepository;
    }

    /**
     * Membuat laporan kerusakan baru.
     */
    public function createReport(
        User $user,
        array $data
    ): Laporan {
        $photos = $data['photos'] ?? [];

        unset($data['photos']);

        // Menyimpan daftar path foto untuk keperluan cleanup.
        $storedPaths = [];

        try {
            return DB::transaction(function () use (
                $user,
                $data,
                $photos,
                &$storedPaths
            ) {
                // 1. Simpan data laporan.
                $report = $this->reportRepository->create([
                    'user_id' => $user->id,
                    'facility_id' => $data['facility_id'],
                    'description' => $data['description'],
                    'status' => 'menunggu_verifikasi',
                ]);

                // 2. Simpan foto laporan.
                foreach ($photos as $photo) {
                    if (!$photo instanceof UploadedFile) {
                        continue;
                    }

                    $path = $photo->store('reports', 'private');

                    if (!$path) {
                        throw new RuntimeException(
                            'Gagal menyimpan foto laporan.'
                        );
                    }

                    $storedPaths[] = $path;

                    $this->reportRepository->createPhoto(
                        $report,
                        $path
                    );
                }

                // 3. Catat riwayat status awal.
                $this->reportRepository->createStatusLog(
                    $report,
                    [
                        'changed_by' => $user->id,
                        'old_status' => null,
                        'new_status' => 'menunggu_verifikasi',
                        'note' => 'Laporan dibuat oleh pelapor.',
                        'changed_at' => now(),
                    ]
                );

                // 4. Kembalikan laporan beserta relasinya.
                return $this->reportRepository->findById(
                    $report->id
                );
            });
        } catch (Throwable $exception) {
            // Hapus file jika transaksi database gagal.
            if (!empty($storedPaths)) {
                Storage::disk('private')->delete($storedPaths);
            }

            throw $exception;
        }
    }

    // Mengambil daftar laporan.
    public function getAllReports(
        User $user,
        array $filters = []
    ) {
        return $this->reportRepository->getAll($user, $filters);
    }

    // Mengambil detail laporan.
    public function getReportById(int $id): Laporan
    {
        return $this->reportRepository->findById($id);
    }
}
