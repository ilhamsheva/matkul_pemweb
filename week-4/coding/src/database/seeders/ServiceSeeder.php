<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'title' => 'Our Online Services',
            'title_desc' => 'We offer a wide range of services to meet your needs',
            'service' => 'Digital Marketing',
            'service_desc' => 'We help you create targeted campaigns to boost your online presence and drive sales.',
            'image_service' => 'https://tse4.mm.bing.net/th?id=OIP.xMlvIA1S6H3JCDDfHJrN6QHaE3&pid=Api&P=0&h=180',
        ]);
        
        Service::create([
            'title' => 'Our Online Services',
            'title_desc' => 'We offer a wide range of services to meet your needs',
            'service' => 'Web Design',
            'service_desc' => 'We design beautiful, responsive websites tailored to your business needs.',
            'image_service' => 'https://tse3.mm.bing.net/th?id=OIP.ExUMGcgLhnkYGwDJXWDd1QHaF8&pid=Api&P=0&h=180',
        ]);
        
        Service::create([
            'title' => 'Our Online Services',
            'title_desc' => 'We offer a wide range of services to meet your needs',
            'service' => 'SEO',
            'service_desc' => 'We help your website rank higher on search engines to attract more organic traffic.',
            'image_service' => 'https://tse2.mm.bing.net/th?id=OIP.L23Wfwd8qfrn9zkqFWGDVQHaE7&pid=Api&P=0&h=180',
        ]);
        
        Service::create([
            'title' => 'Our Online Services',
            'title_desc' => 'We offer a wide range of services to meet your needs',
            'service' => 'Logo Design',
            'service_desc' => 'Our logo design services will create a unique identity for your brand.',
            'image_service' => 'https://tse1.mm.bing.net/th?id=OIP.YBpXSFpgZNTEKo-yQ8_DNQHaEK&pid=Api&P=0&h=180',
        ]);
        
        Service::create([
            'title' => 'Our Online Services',
            'title_desc' => 'We offer a wide range of services to meet your needs',
            'service' => 'Graphic Design',
            'service_desc' => 'We provide high-quality graphic design to enhance your marketing materials.',
            'image_service' => 'https://tse1.mm.bing.net/th?id=OIP.cWuEFuzNtoqBk7RAHft-JAHaHa&pid=Api&P=0&h=180',
        ]);
    }
}