# Profil Pribadi dengan HTML dan CSS (Bootstrap)

## 1. Navbar
Navbar akan menyediakan menu navigasi yang mengarah ke dua halaman utama, yaitu **Home** dan **Skills**.

### Struktur Navbar:
Navbar ini akan berisi dua link utama: **Home** dan **Skills**. Navbar juga akan responsif, artinya tampilan navbar akan menyesuaikan dengan ukuran layar perangkat yang digunakan, seperti pada tampilan desktop dan mobile.

## 2. Halaman Home
Di halaman **Home**, Anda akan menampilkan **card profile** yang berisi informasi pribadi serta link ke media sosial yang bisa dihubungkan.

### Struktur Card Profile:
Card ini akan berisi foto profil, nama, jurusan, serta tombol atau link yang mengarah ke media sosial pribadi (LinkedIn, GitHub, dll). Gunakan elemen **card** dari Bootstrap untuk membuat layout yang rapi.

### Penjelasan:
- Gambar profil akan ditampilkan dengan bentuk bulat menggunakan kelas `rounded-circle`.
- Nama, jurusan, dan universitas Anda akan disusun dengan rapi menggunakan elemen teks.
- Tombol atau link akan mengarah ke media sosial seperti LinkedIn dan GitHub, menggunakan tombol `btn` dari Bootstrap untuk mempercantik tampilan.

## 3. Halaman Skills
Di halaman **Skills**, Anda akan menampilkan **skill** yang Anda kuasai dengan menggunakan **progress bar** untuk menunjukkan persentase keterampilan. Selain itu, untuk menampilkan statistik secara visual, Anda akan menggunakan **pie chart** untuk menggambarkan seberapa besar kemampuan Anda dalam berbagai skill.

### Struktur Skill dengan Progress Bar:
Untuk menunjukkan keterampilan dalam HTML, CSS, JavaScript, dll, Anda dapat menggunakan elemen **progress bar** dari Bootstrap.

### Penjelasan:
- **Progress bar** digunakan untuk menggambarkan seberapa besar penguasaan Anda terhadap berbagai skill.
- Setiap skill akan memiliki persentase yang dapat disesuaikan (misalnya 90% untuk HTML, 85% untuk CSS).
- Ini memberikan visualisasi yang jelas dan mudah dipahami mengenai keterampilan Anda.

### Statistik menggunakan Pie Chart:
Untuk menggambarkan statistik menggunakan **pie chart**, Anda bisa menggunakan **Chart.js** atau **Canvas** yang terintegrasi dengan Bootstrap. Pie chart ini akan memberikan gambaran visual mengenai persentase penguasaan skill.

### Penjelasan:
- **Pie chart** akan menampilkan distribusi keterampilan Anda dalam bentuk lingkaran yang terbagi berdasarkan persentase penguasaan masing-masing skill (HTML, CSS, JavaScript, Laravel, dll).
- Setiap bagian pie chart akan diberi warna berbeda untuk membedakan antara skill yang berbeda.

## 4. Struktur Umum Halaman
Berikut adalah gambaran umum struktur aplikasi atau halaman profil Anda:
- **Navbar** untuk navigasi antara **Home** dan **Skills**.
- **Halaman Home** yang berisi **card profil pribadi** Anda dengan foto dan link ke media sosial.
- **Halaman Skills** yang menampilkan **progress bar** dan **pie chart** untuk menunjukkan penguasaan skill Anda.
