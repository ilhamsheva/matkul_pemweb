<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed satu data produk
        if (Product::count() == 0) {
            Product::create([
                'name' => 'Sepatu',
                'description' => 'Adidas',
                'image' => 'https://tse3.mm.bing.net/th?id=OIP.iRYQ3PMr-PJtRExs8xjEbQHaHa&pid=Api&P=0&h=180',
            ]);
        }
    }
}
