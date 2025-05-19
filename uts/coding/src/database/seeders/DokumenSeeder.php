<?php

namespace Database\Seeders;

use App\Models\Pendaftaran;
use App\Models\Dokumen;
use Illuminate\Database\Seeder;

class DokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing dokumen records
        Dokumen::query()->delete();

        // Get all pendaftaran entries
        $pendaftarans = Pendaftaran::all();

        // Create dokumen entries for each pendaftaran
        $dokumens = [
            [
                'pendaftaran_id' => $pendaftarans->where('status', 'menunggu')->first()->id,
                'nama_dokumen' => 'Transkrip Akademik',
                'file_path' => 'dokumen/transkrip_12345678.pdf'
            ],
            [
                'pendaftaran_id' => $pendaftarans->where('status', 'menunggu')->first()->id,
                'nama_dokumen' => 'Surat Rekomendasi',
                'file_path' => 'dokumen/rekomendasi_12345678.pdf'
            ],
            [
                'pendaftaran_id' => $pendaftarans->where('status', 'diterima')->first()->id,
                'nama_dokumen' => 'Proposal Bisnis',
                'file_path' => 'dokumen/proposal_87654321.pdf'
            ],
            [
                'pendaftaran_id' => $pendaftarans->where('status', 'diterima')->first()->id,
                'nama_dokumen' => 'Surat Pernyataan',
                'file_path' => 'dokumen/pernyataan_87654321.pdf'
            ],
            [
                'pendaftaran_id' => $pendaftarans->where('status', 'ditolak')->first()->id,
                'nama_dokumen' => 'Portofolio Prestasi',
                'file_path' => 'dokumen/portofolio_56781234.pdf'
            ]
        ];

        // Create dokumen entries
        foreach ($dokumens as $dokumenData) {
            Dokumen::create($dokumenData);
        }
    }
}