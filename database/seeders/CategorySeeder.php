<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Toilet dan Saluran Air',
                'severity_weight' => 4.80,
            ],
            [
                'name' => 'Meja dan Kursi',
                'severity_weight' => 4.50,
            ],
            [
                'name' => 'Jaringan Internet dan Wi-Fi',
                'severity_weight' => 3.90,
            ],
            [
                'name' => 'Listrik dan Penerangan',
                'severity_weight' => 4.70,
            ],
            [
                'name' => 'Pendingin Ruangan',
                'severity_weight' => 4.00,
            ],
            [
                'name' => 'Proyektor dan Peralatan Kelas',
                'severity_weight' => 3.80,
            ],
            [
                'name' => 'Fasilitas Umum Lainnya',
                'severity_weight' => 3.00,
            ],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->updateOrInsert(
                ['name' => $category['name']],
                ['severity_weight' => $category['severity_weight']]
            );
        }
    }
}