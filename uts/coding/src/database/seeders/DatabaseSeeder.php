<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Nonaktifkan foreign key check
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Hapus data dari tabel dengan urutan terbalik
        DB::table('dokumens')->truncate();
        DB::table('pendaftarans')->truncate();
        DB::table('beasiswas')->truncate();
        DB::table('users')->truncate();

        // Aktifkan kembali foreign key check
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Create admin users
        $adminUsers = [
            [
                'name' => 'Super Admin',
                'nim' => 'ADMIN001',
                'email' => 'admin@admin.com',
                'role' => 'admin',
                'avatar_url' => null,
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Admin Kedua',
                'nim' => 'ADMIN002',
                'email' => 'admin2@admin.com',
                'role' => 'admin',
                'avatar_url' => null,
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        ];

        // Create student users
        $studentUsers = [
            [
                'name' => 'Mahasiswa Pertama',
                'nim' => '12345678',
                'email' => 'mahasiswa1@example.com',
                'role' => 'mahasiswa',
                'avatar_url' => null,
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Mahasiswa Kedua',
                'nim' => '87654321',
                'email' => 'mahasiswa2@example.com',
                'role' => 'mahasiswa',
                'avatar_url' => null,
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Mahasiswa Ketiga',
                'nim' => '56781234',
                'email' => 'mahasiswa3@example.com',
                'role' => 'mahasiswa',
                'avatar_url' => null,
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        ];

        // Combine and create users
        $allUsers = array_merge($adminUsers, $studentUsers);
        
        foreach ($allUsers as $userData) {
            $user = User::create($userData);

            // Assign role for admin users
            if ($userData['role'] === 'admin') {
                $user->assignRole('super_admin');
            }
        }

        // Panggil seeder lainnya
        $this->call([
            BeasiswaSeeder::class,
            PendaftaranSeeder::class,
            DokumenSeeder::class,
        ]);
    }
}