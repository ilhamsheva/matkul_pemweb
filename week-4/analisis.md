## Senin, 21 April 2025

# Pengeditan Admin Panel di Filament

## 1. Mengedit Admin Panel di `app\Providers\Filament\AdminPanelProvider.php`

Di dalam aplikasi berbasis **Filament**, file `AdminPanelProvider.php` adalah tempat di mana kita dapat mengatur dan menyesuaikan panel admin sesuai kebutuhan kita.

### Fungsi dari `AdminPanelProvider.php`
File ini bertanggung jawab untuk mengonfigurasi dan menyetel pengaturan panel admin secara global. Beberapa hal yang dapat diubah di dalam file ini antara lain:

- **Pengaturan Navigasi**: Menambahkan grup navigasi atau mengubah ikon yang digunakan dalam navigasi panel admin.
- **Mengonfigurasi Sumber Daya**: Menambahkan atau mengonfigurasi berbagai **Resources** yang akan dikelola di dalam panel.
- **Setting Panel Admin**: Anda dapat menambahkan tema, logo, atau elemen lainnya yang ingin disesuaikan agar sesuai dengan desain aplikasi Anda.

---

## 2. Penggunaan `app\Filament\Admin\Resource`

Bagian **`app\Filament\Admin\Resource`** digunakan untuk mendefinisikan dan mengelola sumber daya yang akan ditampilkan atau dimanipulasi dalam panel admin. Sumber daya ini berkaitan langsung dengan model **Eloquent**, tampilan (**views**), dan form yang ada dalam aplikasi.

### Fungsi dari `Resource` di Filament
Pada umumnya, **`Resource`** bertugas untuk:

- **Mendefinisikan Model**: Menyambungkan model **Eloquent** yang akan dikelola di dalam panel admin.
- **Membuat Form**: Mengonfigurasi form input yang digunakan untuk membuat atau memperbarui data dalam database.
- **Menampilkan Data di Tabel**: Menyusun dan menampilkan data dalam bentuk tabel yang interaktif.
- **Filter dan Action**: Menambahkan filter untuk mempermudah pencarian dan penyaringan data, serta menyediakan tindakan seperti **edit**, **delete**, dll.

### Struktur Dasar `Resource`
Setiap **`Resource`** di Filament biasanya terdiri dari beberapa komponen utama, seperti berikut:

1. **Model**: Model **Eloquent** yang digunakan untuk menyimpan data.
2. **Form**: Menyusun input form untuk membuat dan mengedit data.
3. **Tabel**: Menyusun tabel yang digunakan untuk menampilkan data.
4. **Halaman**: Mengatur halaman untuk membuat, mengedit, dan melihat data.
5. **Filter**: Menyediakan opsi untuk menyaring data berdasarkan kriteria tertentu.
6. **Action**: Menyediakan tindakan yang dapat dilakukan pada data, seperti menyimpan, menghapus, atau mengubah status data.
7. **Authorization**: Mengatur izin akses untuk setiap sumber daya agar hanya pengguna tertentu yang dapat mengakses atau melakukan tindakan pada data.