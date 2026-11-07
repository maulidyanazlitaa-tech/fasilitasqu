<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportStatusLog extends Model
{
    use HasFactory;

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

    public function Laporan()
    {
        return $this->belongsTo(Laporan::class);
    }

    public function changedBy()
    {
        return $this->belongsTo(User::class, 'changed_by');
    }
}