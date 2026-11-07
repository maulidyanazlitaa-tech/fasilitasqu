<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleUserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Masyarakat Demo',
                'email' => 'masyarakat@fasilitasqu.test',
                'role' => 'masyarakat',
            ],
            [
                'name' => 'Admin Demo',
                'email' => 'admin@fasilitasqu.test',
                'role' => 'admin',
            ],
            [
                'name' => 'Petugas Demo',
                'email' => 'petugas@fasilitasqu.test',
                'role' => 'petugas',
            ],
            [
                'name' => 'Koordinator Demo',
                'email' => 'koordinator@fasilitasqu.test',
                'role' => 'koordinator',
            ],
        ];

        foreach ($users as $userData) {
            User::updateOrCreate(
                ['email' => $userData['email']],
                [
                    'name' => $userData['name'],
                    'role' => $userData['role'],
                    'password' => Hash::make('password123'),
                ]
            );
        }
    }
}