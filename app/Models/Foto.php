<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $table = 'photos';

    protected $fillable = [
        'report_id',
        'file_path',
    ];

    // Laporan yang memiliki foto ini
    public function laporan()
    {
        return $this->belongsTo(Laporan::class, 'report_id');
    }
}
