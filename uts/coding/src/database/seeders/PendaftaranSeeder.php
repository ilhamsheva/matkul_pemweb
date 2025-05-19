<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Beasiswa;
use App\Models\Pendaftaran;
use Illuminate\Database\Seeder;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing pendaftaran records
        Pendaftaran::query()->delete();

        // Get all mahasiswa users
        $mahasiswaUsers = User::where('role', 'mahasiswa')->get();

        // Get all active beasiswas
        $activeBeasiswas = Beasiswa::where('status', 'aktif')->get();

        // Create pendaftaran entries
        $pendaftarans = [
            [
                'user_id' => $mahasiswaUsers->where('nim', '12345678')->first()->id,
                'beasiswa_id' => $activeBeasiswas->where('nama_beasiswa', 'Beasiswa Prestasi Akademik')->first()->id,
                'tanggal_daftar' => now()->subDays(10),
                'status' => 'menunggu'
            ],
            [
                'user_id' => $mahasiswaUsers->where('nim', '87654321')->first()->id,
                'beasiswa_id' => $activeBeasiswas->where('nama_beasiswa', 'Beasiswa Wirausaha Muda')->first()->id,
                'tanggal_daftar' => now()->subDays(5),
                'status' => 'diterima'
            ],
            [
                'user_id' => $mahasiswaUsers->where('nim', '56781234')->first()->id,
                'beasiswa_id' => $activeBeasiswas->where('nama_beasiswa', 'Beasiswa Prestasi Akademik')->first()->id,
                'tanggal_daftar' => now()->subDays(15),
                'status' => 'ditolak'
            ]
        ];

        // Create pendaftaran entries
        foreach ($pendaftarans as $pendaftaranData) {
            Pendaftaran::create($pendaftaranData);
        }
    }
}