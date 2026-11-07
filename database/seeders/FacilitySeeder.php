<?php

namespace Database\Seeders;

use App\Models\Kategory;
use App\Models\Fasilitas;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    public function run(): void
    {
        $category = Kategory::where(
            'name',
            'Toilet dan Saluran Air'
        )->first();

        if (!$category) {
            return;
        }

        Fasilitas::updateOrCreate(
            [
                'name' => 'Toilet Contoh',
                'building' => 'Gedung Contoh',
            ],
            [
                'category_id' => $category->id,
                'description' => 'Data fasilitas contoh untuk pengujian sistem.',
                'latitude' => null,
                'longitude' => null,
                'condition_status' => 'baik',
            ]
        );
    }
}