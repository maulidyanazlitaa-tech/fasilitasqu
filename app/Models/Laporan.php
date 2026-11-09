<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

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

    // Pelapor
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Fasilitas yang dilaporkan
    public function Fasilitas()
    {
        return $this->belongsTo(Fasilitas::class);
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
        return $this->hasMany(Foto::class);
    }

    // Hasil perhitungan prioritas
    public function priority()
    {
        return $this->hasOne(priority::class);
    }

    // Riwayat status laporan
    public function statusLogs()
    {
        return $this->hasMany(ReportStatusLog::class);
    }
}