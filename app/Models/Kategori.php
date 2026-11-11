<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'severity_weight',
    ];

    protected function casts(): array
    {
        return [
            'severity_weight' => 'decimal:2',
        ];
    }

    public function facilities()
    {
        return $this->hasMany(Fasilitas::class, 'category_id');
    }
}