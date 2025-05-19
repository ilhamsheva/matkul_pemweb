<?php

namespace Database\Seeders;

use App\Models\Beasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat beberapa beasiswa
        $beasiswas = [
            [
                'nama_beasiswa' => 'Beasiswa Prestasi Akademik',
                'deskripsi' => 'Beasiswa untuk mahasiswa dengan prestasi akademik tinggi',
                'syarat' => '1. IPK minimal 3.5\n2. Mahasiswa aktif\n3. Tidak sedang menerima beasiswa lain',
                'deadline' => now()->addMonths(6),
                'image' => 'beasiswa_prestasi.jpg',
                'status' => 'aktif',
            ],
            [
                'nama_beasiswa' => 'Beasiswa Wirausaha Muda',
                'deskripsi' => 'Beasiswa untuk mahasiswa yang memiliki potensi kewirausahaan',
                'syarat' => '1. Memiliki rencana bisnis\n2. Mahasiswa aktif\n3. Mengikuti workshop kewirausahaan',
                'deadline' => now()->addMonths(4),
                'image' => 'beasiswa_wirausaha.jpg',
                'status' => 'aktif',
            ],
            [
                'nama_beasiswa' => 'Beasiswa Penelitian Mahasiswa',
                'deskripsi' => 'Beasiswa untuk mahasiswa yang aktif dalam kegiatan penelitian',
                'syarat' => '1. Memiliki publikasi ilmiah\n2. Mahasiswa aktif\n3. Direkomendasikan oleh dosen pembimbing',
                'deadline' => now()->addMonths(2),
                'image' => 'beasiswa_penelitian.jpg',
                'status' => 'nonaktif',
            ]
        ];

        // Membuat beasiswa
        foreach ($beasiswas as $beasiswaData) {
            Beasiswa::create($beasiswaData);
        }
    }
}