# 📅 Senin, 24 Maret 2025  

## 📌 Setiap pertemuan wajib ada:
1. **Analisa**  
2. **Source Code**  
3. **Dokumentasi**  

## 🖥️ Pertemuan 1  

Hari ini belum masuk ke aspek teknis, masih membahas tentang tools yang akan digunakan dalam pemrograman web.  

### 🌐 Website  
- Website yang akan dibuat adalah **website untuk memenuhi kebutuhan pengguna dalam mencari informasi**.  
- Website memiliki address, contohnya `facebook.com`.  

### 📑 HTML (HyperText Markup Language)  
HTML adalah bahasa markup yang digunakan untuk membuat halaman web. Beberapa tag penting:  
- `<div>` → Membuat konten yang dapat diatur.  
- `<p>` → Membuat paragraf.  
- `<button>` → Membuat tombol.  
- `<a>` → Anchor, digunakan untuk membuat link.  
- `<nav>` → Digunakan untuk navigasi.
- `<h>` → Digunakan untuk heading. h1 sampai dengan h6.
- `<img>` → Digunakan untuk menampilkan gambar.
- `<ul>` → Digunakan untuk membuat daftar yang berurutan.
  - `<li>` → Digunakan untuk membuat item dalam daftar.
- `<form>` → Digunakan untuk membuat form.  
  - `<label>` → Memberi nama pada sub form.  
  - `<input>` → Membuat inputan.  

## 🐳 Apa itu Docker?  
Docker adalah platform open-source yang memungkinkan pengembang untuk membuat, mengembangkan, dan berbagi aplikasi dalam satu kontainer. Kontainer Docker memungkinkan aplikasi dapat dijalankan dengan konsisten di berbagai lingkungan.  

### ✅ Kelebihan Docker:  
1. **Mudah digunakan** → Docker memiliki antarmuka yang user-friendly.  
2. **Menghemat sumber daya** → Docker lebih ringan dibandingkan virtual machine.  
3. **Meningkatkan keamanan** → Docker memisahkan aplikasi dalam lingkungan terisolasi.  

---

## 🔄 Jenis Docker  
Docker memiliki **2 jenis utama**, yaitu:  

### 1️⃣ **Docker CLI** (Command Line Interface)  
Alat baris perintah yang digunakan untuk berinteraksi dengan Docker. Contoh perintah:  
- `docker run` → Menjalankan kontainer.  
- `docker ps` → Melihat daftar kontainer yang berjalan.  

### 2️⃣ **Docker Engine** ("Docker Biasa")  
Layanan utama yang berjalan di latar belakang untuk mengelola kontainer. Docker CLI mengirimkan perintah ke Docker Engine, dan Docker Engine akan mengeksekusi serta mengelola kontainer.  
- **Docker CLI** → Alat kontrol  
- **Docker Engine** → Sistem yang menjalankan Docker  

---

## ⚖️ Docker vs. XAMPP  
Docker dapat dijalankan di berbagai sistem operasi tanpa perlu banyak penyesuaian. Sebaliknya, **XAMPP hanya berjalan di Windows** dan membutuhkan banyak konfigurasi tambahan jika digunakan di sistem operasi lain.  

---

## 📌 Praktikum Hari Ini  
- *Volumes* Docker harus langsung diarahkan ke folder **`src`**.  
- Penyimpanan harus ditentukan dengan benar untuk menghindari error.  

### ⚠️ Variasi Error di Docker dan Solusinya  
| 🔴 **Error** | ✅ **Solusi** |
|-------------|-------------|
| Container tiba-tiba exit sendiri | Gunakan flag `-d` untuk menjalankan container di background. |
| Container Docker tidak dapat dijalankan | Gunakan flag `-it` untuk menjalankan container dalam mode interaktif. |

📌 **Solusi terakhir jika mengalami masalah serius** → **Reinstall Docker dan restart komputer**.  

### ⚙️ Konfigurasi Project  
## 🛠️ Perintah Docker yang Digunakan  

| Perintah | Fungsi |
|----------|--------|
| `docker compose up -d --build` | Membangun (build) suatu aplikasi. |
| `docker compose up -d` | Menjalankan aplikasi yang sudah ada. |
| `docker compose down` | Menghentikan aplikasi. |
| `docker inspect (nama kontainer)` | Melihat informasi tentang kontainer. |
| `docker ps` | Melihat daftar kontainer yang sedang berjalan. |
| `docker logs (nama kontainer)` | Melihat log aplikasi. |
| `docker exec -it (nama kontainer) bash` | Masuk ke dalam kontainer. |
| `docker stop (nama kontainer)` | Menghentikan kontainer. |
| `docker rm (nama kontainer)` | Menghapus kontainer. |
| `docker rmi (nama kontainer)` | Menghapus kontainer beserta image. |
| `docker system prune -af` | Menghapus semua kontainer dan image yang tidak digunakan. |

---

#### **📁 .env**  
- `COMPOSE_PROJECT_NAME` → Bebas sesuai nama project.  
- `IMAGE_TAG` → Menggunakan NIM sendiri, untuk sekarang memakai `latest`.  

#### **📄 docker-compose.yml**  
- **volumes** → Menyimpan project. Saat membuat file project baru, tambahkan dulu ke `nginx.conf`.  
  - Tanda `:` (colon) merupakan pemisah antara OS dan Docker.  
  - **Sebelah kiri** = OS, **Sebelah kanan** = Docker.  
- **ports** → Mengakses port, tidak harus `80:80`.  
  - Port harus sesuai dengan `listen` di `nginx.conf` (misalnya listen `8000`, maka `ports = 8000:80`).  
- **images** → Mengakses image.  
- **build** → Membuat image.  

#### **🖥️ nginx**  
- Nginx adalah webserver.  
- `location` di `nginx.conf` digunakan untuk mengarahkan source code.  

#### **📦 npm (Node Package Manager)**  
- Digunakan untuk mengelola package dalam project.  

### 📌 Project Details  
- **📝 Project Name:** COMPANY PROFILE  
- **📖 Project Description:**  
  Website yang akan dibuat adalah website untuk memenuhi kebutuhan pengguna.  
  Project harus sesuai dengan analisa, dengan kriteria penilaian berdasarkan analisa dan source code.  

---


Sekian dokumentasi untuk pertemuan pertama. 🚀
