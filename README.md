
# 🎯 Sistem Informasi Produk

Aplikasi web sederhana untuk mengelola data produk, kategori, dan stok.  
Dibangun dengan **Laravel** dan menggunakan **Filament** untuk panel admin yang modern dan mudah digunakan.

---

## ✨ Fitur Utama

- Manajemen produk & kategori
- CRUD otomatis dengan Filament
- Pencarian dan filter data
- Login admin

---

## 🚀 Instalasi

### 1. Clone Project

```bash
git clone https://github.com/ruliawan/test_web_ihp.git
cd test_web_ihp
composer install
npm install && npm run build
cp .env.example .env
php artisan key:generate
```

### 2. Konfigurasi Database

Edit file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_singer
DB_USERNAME=root
DB_PASSWORD=
```

- Buat database baru di MySQL dengan nama `db_singer`
- Import file `db_singer.sql` ke database (bisa via phpMyAdmin)

### 3. Jalankan Server Laravel

```bash
php artisan serve
```

Akses di browser:

- [http://localhost:8000](http://localhost:8000)
- [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 🔐 Akses Admin

- Panel Admin (Filament):  
  [http://localhost:8000/admin](http://localhost:8000/admin)

### Login

- **Email:** `admin@gmail.com`  
- **Password:** `password`

---

## 📦 Teknologi

<div align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" />
  <br/><br/>
  <img src="https://filamentphp.com/images/logo.svg" width="200" />
</div>
