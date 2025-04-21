<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Logo;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Logo::create([
            'title' => 'Ilham Sheva',
            'image' => 'https://tse4.mm.bing.net/th?id=OIP.pSzKEe4ZshIAAhEQPx6uUgHaHa&pid=Api&P=0&h=180',
        ]);
    }
}
