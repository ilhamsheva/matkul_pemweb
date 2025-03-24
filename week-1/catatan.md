## Senin, 24 Maret 2025 ##

Setiap pertemuan wajib ada:
**1. Analisa**
**2. Source Code**
**3. Dokumentasi**

Hari ini belum masuk ke technical. Masih membahas tentang tools yang akan digunakan dalam pemrograman web.

**Pertemuan 1**
- Website yang akan dibuat adalah website untuk memenuhi kebutuhan pengguna dalam mencari informasi. Website memiliki address, contohnya *facebook.com.*
- HTML (HyperText Markup Language) adalah bahasa markup yang digunakan untuk membuat halaman web.
- **.env**
Untuk project kemudian, *COMPOSE_PROJECT_NAME* dibuat bebas sesuai nama. *IMAGE_TAG* dibuat memakai nim sendiri. Untuk sekarang, masih memakai latest.
- **docker-compose.yml**
*volumes* digunakan untuk menyimpan project. ketika baru membuat file yang merupakan project, harus ditambahkan dulu ke *nginx.conf*. tanda colon atau titik dua merupakan pemisah antara OS dan Docker. di sebelah kiri adalah OS dan di sebelah kanan adalah Docker.
*ports* digunakan untuk mengakses port. port tidak harus 80:80. ports harus sesuai dengan listen yang ada di *nginx.conf*. misalnya listen 8000, maka ports = 8000:80
*images* digunakan untuk mengakses image. *build* digunakan untuk membuat image.
- **nginx**: ini merupakan webserver. location di *nginx.conf* digunakan untuk mengarahkan source code.
- **npm**: npm merupakan singkatan dari nginx package manager.

- **Project Name:** COMPANY PROFILE
- **Project Description:** Website yang akan dibuat adalah website untuk memenuhi kebutuhan pengguna.
Project harus sesuai dengan analisa. Kriteria penilaian berdasarkan analisa dan source code.

*(Tanggal pertemuan 2)*
**Pertemuan 2**