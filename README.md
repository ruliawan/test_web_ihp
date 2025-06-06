<p align="center"> <a href="https://laravel.com" target="_blank"> <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo"> </a> <br><br> <a href="https://filamentphp.com" target="_blank"> <img src="https://filamentphp.com/images/logo.svg" width="200" alt="Filament Logo"> </a> </p>

Sistem Informasi Produk
Aplikasi web sederhana untuk mengelola data produk, kategori, dan stok. Dibangun dengan Laravel dan menggunakan Filament untuk panel admin yang modern dan mudah digunakan.

✨ Fitur Utama
- Manajemen produk & kategori
- CRUD otomatis dengan Filament
- Pencarian dan filter data
- Login admin

Instalasi
1. Clone Project
- git clone https://github.com/ruliawan/test_web_ihp.git
- cd test_web_ihp
- composer install
- npm install && npm run build
- cp .env.example .env
- php artisan key:generate
- php artisan serve

2. Konfigurasi Database di .env
Buka file .env, lalu sesuaikan bagian database seperti ini:
DB_CONNECTION=mysql          # Jenis database, biasanya mysql
DB_HOST=127.0.0.1            # Server database, biasanya localhost
DB_PORT=3306                 # Port database, default MySQL adalah 3306
DB_DATABASE=produk_db        # Nama database yang sudah kamu buat
DB_USERNAME=root             # Username database (misal: root)
DB_PASSWORD=                 # Password user database (kosong jika tidak ada)


3. Setup Database 
- Buat database baru di MySQL yaitu db_singer
- Import file db_singer.sql ke database tersebut (pakai phpMyAdmin atau sejenisnya)

4. Jalankan Server Laravel
   Jalankan perintah ini untuk memulai server lokal Laravel:
   php artisan serve
   Biasanya server berjalan di alamat:
   http://localhost:8000 atau http://127.0.0.1:8000 

5. Akses Aplikasi
   Buka browser dan akses:

   Halaman depan aplikasi (jika ada):
   http://localhost:8000 atau http://127.0.0.1:8000 

   Panel admin (Filament):
   http://localhost:8000/admin atau http://127.0.0.1:8000/admin

4. Login Admin
Gunakan akun default:
Email: admin@gmail.com
Password: password

