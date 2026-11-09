<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportStatusLog extends Model
{
    use HasFactory;

    protected $table = 'report_status_logs';

    protected $fillable = [
        'report_id',
        'changed_by',
        'old_status',
        'new_status',
        'note',
        'changed_at',
    ];

    protected function casts(): array
    {
        return [
            'changed_at' => 'datetime',
        ];
    }

    // Laporan yang memiliki riwayat status ini
    public function laporan()
    {
        return $this->belongsTo(Laporan::class, 'report_id');
    }

    // Pengguna yang mengubah status
    public function changedBy()
    {
        return $this->belongsTo(User::class, 'changed_by');
    }
}
