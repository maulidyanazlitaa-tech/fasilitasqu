<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'reports';

    protected $fillable = [
        'user_id',
        'facility_id',
        'assigned_to',
        'verified_by',
        'description',
        'damage_level',
        'status',
        'rejection_reason',
        'verified_at',
    ];

    protected function casts(): array
    {
        return [
            'damage_level' => 'integer',
            'verified_at' => 'datetime',
        ];
    }

    // Pengguna yang membuat laporan
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Fasilitas yang dilaporkan
    public function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class, 'facility_id');
    }

    // Petugas yang ditugaskan
    public function assignedTo()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    // Admin yang memverifikasi
    public function verifiedBy()
    {
        return $this->belongsTo(User::class, 'verified_by');
    }

    // Foto bukti kerusakan
    public function photos()
    {
        return $this->hasMany(Foto::class, 'report_id');
    }

    // Hasil perhitungan prioritas
    public function priority()
    {
        return $this->hasOne('App\\Models\\Prioritas', 'report_id');
    }

    // Riwayat perubahan status
    public function statusLogs()
    {
        return $this->hasMany(ReportStatusLog::class, 'report_id');
    }
}
