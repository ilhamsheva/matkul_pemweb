<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Footer; // Ensure you have the correct namespace for your Footer model

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if any Footer record exists before seeding
        if (Footer::count() == 0) {
            Footer::create([
                'section' => 'About Us',  // Section name
                'label' => 'We are a leading company in our industry.', // Label content
                'url' => 'https://example.com/about',  // URL for the link
                'order' => 1,  // Order of display
            ]);
        }
    }
}
