# Portal Pembelajaran CBL-DT (Anatomi Fisiologi Manusia)

![Laravel](https://img.shields.io/badge/Laravel-10%2F11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![MySQL](https://img.shields.io/badge/Database-MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)

## 📖 Tentang Project

Website ini adalah sistem manajemen pembelajaran yang dikembangkan untuk mendukung model **Challenge Based Learning (CBL)** yang terintegrasi dengan **Design Thinking (DT)**. Sistem ini dirancang khusus untuk mata kuliah **Anatomi Fisiologi Manusia** guna meningkatkan keterampilan berpikir kritis mahasiswa.

Aplikasi ini berfungsi sebagai pusat informasi, panduan sintaks, repositori bahan ajar, serta platform pengumpulan tugas proyek mahasiswa.

## ✨ Fitur Utama

-   **Landing Page Informatif:** Penjelasan visual mengenai model CBL-DT, teori pendukung (Konstruktivisme, Kognitivisme, dll), dan alur sintaks pembelajaran.
-   **Panduan Interaktif:** Viewer PDF terintegrasi untuk menampilkan Buku Panduan Dosen dan Mahasiswa tanpa harus keluar dari aplikasi.
-   **Repository Dokumen:** Akses terpusat ke RPS, LKM, Instrumen Penilaian, dan Lembar Validasi (terintegrasi dengan Google Drive).
-   **Manajemen Proyek:** Fitur bagi mahasiswa untuk mengunggah tugas/proyek per pertemuan (Gambar/Dokumen) dan memberikan deskripsi.
-   **Galeri Proyek:** Menampilkan hasil karya mahasiswa yang telah diunggah.
-   **Sintaks & Tahapan:** Penjelasan rinci langkah-langkah pembelajaran dari *Empathize* hingga *Rencana Tindak Lanjut*.

## 🛠️ Teknologi yang Digunakan

-   **Backend Framework:** Laravel 10/11 (PHP)
-   **Frontend:** Blade Templates & Bootstrap 5
-   **Database:** MySQL
-   **Fitur Lain:** PDF Viewer (Iframe), Storage Link

## 🚀 Cara Instalasi (Localhost)

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer lokal Anda:

### Prasyarat
Pastikan Anda sudah menginstal:
-   PHP (versi >= 8.1)
-   Composer
-   MySQL (via XAMPP/Laragon/Docker)

### Langkah Instalasi

1.  **Clone Repository**
    ```bash
    git clone [https://github.com/USERNAME_ANDA/laravel-cbl-dt.git](https://github.com/USERNAME_ANDA/laravel-cbl-dt.git)
    cd laravel-cbl-dt
    ```

2.  **Install Dependencies**
    ```bash
    composer install
    ```

3.  **Setup Environment**
    Salin file `.env.example` menjadi `.env`:
    ```bash
    cp .env.example .env
    ```
    Buka file `.env` dan sesuaikan konfigurasi database Anda:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=cbl_dt_db  <-- Pastikan database ini sudah dibuat
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4.  **Generate Key**
    ```bash
    php artisan key:generate
    ```

5.  **Migrasi Database**
    ```bash
    php artisan migrate
    ```

6.  **Setup Storage Link**
    Penting agar file upload dan PDF bisa diakses publik:
    ```bash
    php artisan storage:link
    ```

7.  **Jalankan Server**
    ```bash
    php artisan serve
    ```
    Buka browser dan akses: `http://127.0.0.1:8000`

## 📂 Struktur File Penting

-   `app/Models/Project.php` - Model database untuk tugas mahasiswa.
-   `app/Http/Controllers/ProjectController.php` - Logika upload dan display proyek.
-   `resources/views/pages/` - Halaman utama (Home, Panduan, Perangkat, dll).
-   `public/files/` - Lokasi penyimpanan file PDF statis (Panduan Dosen/Mahasiswa).

<!-- ## 👥 Kredit & Tim Pengembang

**Peneliti & Pengembang Utama:**
* **Sulton Nawawi** (Program Studi Doktor Pendidikan MIPA - Universitas Jambi)

**Tim Promotor:**
* Prof. Dr. Dra. Asni Johari, M.Si.
* Prof. Dr. Revis Asra, M.Si.
* Dr. Dra. Evita Anggereini, M.Si. -->

---
&copy; 2025 Model Pembelajaran CBL-DT. All Rights Reserved.