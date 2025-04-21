## Senin, 21 April 2025

Pokok aplikasi yang dijalankan adalah:
- app/Model: ini buat class
- app/Http/Controller: ini untuk mengatur logika aplikasi dan menangani permintaan dari pengguna
- app/Filament: ini untuk mengelola tampilan dan antarmuka admin
- app/Livewire: ini untuk membangun komponen interaktif di aplikasi
- public: untuk menyimpan file statis dan aset publik seperti gambar, CSS, dan JavaScript
- database/migration: untuk mengelola struktur tabel dan skema basis data
- database/seeder: untuk data dummy


Kita hari ini belajar cara memisah folder lagi. Minggu kemarin, kita menimpa semua header, navbar, footer, dan script di `app.blade.php`. Sekarang, semua itu dipindah ke `resource/views/components/partials` agar lebih terorganisir dan memudahkan pemeliharaan kode di masa mendatang.
isi folder components/partials akan terdiri dari file-file seperti header.blade.php, navbar.blade.php, footer.blade.php, dan script.blade.php

Lalu, semuanya dipanggil kembali di app.blade.php menggunakan sintaks Blade seperti @include('components.partials.header'), @include('components.partials.navbar'), @include('components.partials.footer'), dan @include('components.partials.script')

`php artisan make:model NamaModel -ms`: perintah ini akan membuat model baru bernama NamaModel beserta migrasi dan seeder terkait.

`php artisan make:filament-resource Footer --generate`: perintah ini akan membuat sumber daya Filament baru bernama Footer dan secara otomatis.

Cara mengambil dari database adalah

``@php
    // Tambahkan model
    use App\Models\Footer;

    // Tambahkan footer
    $footer = Footer::first();
@endphp``

letakkan itu di salah satu file view yang ingin menampilkan footer, seperti `footer.blade.php`

lalu tambahkan `$footer->footer ?? ''` yang berfungsi untuk menampilkan konten footer jika ada