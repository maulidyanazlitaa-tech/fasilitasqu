<?php

namespace App\Repositories;

use App\Models\Laporan;
use App\Models\Foto;
use App\Models\ReportStatusLog;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ReportRepository
{
    // Mengambil daftar laporan sesuai role pengguna.
    public function getAll(User $user, array $filters = []): LengthAwarePaginator
    {
        $query = Laporan::with([
            'user:id,name,email',
            'fasilitas',
            'photos',
            'priority',
        ]);

        if ($user->role === 'masyarakat') {
            $query->where('user_id', $user->id);
        } elseif ($user->role === 'petugas') {
            $query->where('assigned_to', $user->id);
        }

        if (!empty($filters['status'])) {
            $query->where('status', $filters['status']);
        }

        if (!empty($filters['facility_id'])) {
            $query->where('facility_id', $filters['facility_id']);
        }

        return $query->latest()->paginate(10)->withQueryString();
    }

    // Menyimpan laporan baru.
    public function create(array $data): Laporan
    {
        return Laporan::create($data);
    }

    // Menyimpan foto laporan.
    public function createPhoto(Laporan $report, string $filePath): Foto
    {
        return $report->photos()->create([
            'file_path' => $filePath,
        ]);
    }

    // Mencatat riwayat status.
    public function createStatusLog(
        Laporan $report,
        array $data
    ): ReportStatusLog {
        return $report->statusLogs()->create($data);
    }

    // Mengambil laporan beserta relasinya.
    public function findById(int $id): Laporan
    {
        return Laporan::with([
            'user:id,name,email',
            'fasilitas',
            'assignedTo:id,name,email',
            'verifiedBy:id,name,email',
            'photos',
            'priority',
            'statusLogs.changedBy:id,name,role',
        ])->findOrFail($id);
    }

    // Memperbarui data laporan.
    public function update(Laporan $report, array $data): Laporan
    {
        $report->update($data);

        return $report->fresh();
    }
}
