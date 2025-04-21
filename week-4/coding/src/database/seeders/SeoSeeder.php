<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seo; // Ensure you have the correct namespace for your Seo model

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Seo::count() == 0) {
            Seo::create([
                'title' => 'Ilham Sheva',
                'description' => 'Ilham Sheva is a web developer and designer.',
                'keywords' => 'web development, design, programming',
                'url' => 'https://ilham.com',
                'robots' => 'index, follow',
            ]);
        }
    }
}
