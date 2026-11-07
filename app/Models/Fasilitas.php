<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'building',
        'description',
        'latitude',
        'longitude',
        'condition_status',
    ];

    protected function casts(): array
    {
        return [
            'latitude' => 'decimal:7',
            'longitude' => 'decimal:7',
        ];
    }

    public function Kategory()
    {
        return $this->belongsTo(Kategory::class);
    }

    public function reports()
    {
        return $this->hasMany(Laporan::class);
    }
}