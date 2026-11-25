<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prioritas extends Model
{
    use HasFactory;

    protected $table = 'priorities';

    protected $fillable = [
        'report_id',
        'k_score',
        'd_score',
        'f_score',
        'u_score',
        'score',
        'level',
        'calculated_at',
    ];

    protected function casts(): array
    {
        return [
            'k_score' => 'decimal:2',
            'd_score' => 'decimal:2',
            'f_score' => 'decimal:2',
            'u_score' => 'decimal:2',
            'score' => 'decimal:3',
            'calculated_at' => 'datetime',
        ];
    }

    public function report()
    {
        return $this->belongsTo(Laporan::class);
    }
}
