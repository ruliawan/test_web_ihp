<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sistem Informasi Produk - README</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      max-width: 800px;
      margin: 2rem auto;
      padding: 0 1rem;
      line-height: 1.6;
      color: #333;
      background-color: #f9f9f9;
    }
    h1, h2, h3 {
      color: #cc0000;
    }
    code {
      background-color: #eee;
      padding: 2px 6px;
      border-radius: 3px;
      font-family: monospace;
      font-size: 0.95em;
    }
    pre {
      background-color: #eee;
      padding: 1rem;
      border-radius: 5px;
      overflow-x: auto;
    }
    ul {
      margin-top: 0;
      padding-left: 1.25rem;
    }
    .center {
      text-align: center;
      margin-bottom: 2rem;
    }
    a {
      color: #cc0000;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
    .section {
      margin-bottom: 2rem;
    }
  </style>
</head>
<body>

  <div class="center">
    <a href="https://laravel.com" target="_blank" rel="noopener">
      <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" alt="Laravel Logo" width="300" />
    </a>
    <br /><br />
    <a href="https://filamentphp.com" target="_blank" rel="noopener">
      <img src="https://filamentphp.com/images/logo.svg" alt="Filament Logo" width="200" />
    </a>
  </div>

  <h1>Sistem Informasi Produk</h1>
  <p>
    Aplikasi web sederhana untuk mengelola data produk, kategori, dan stok.  
    Dibangun dengan Laravel dan menggunakan Filament untuk panel admin yang modern dan mudah digunakan.
  </p>

  <div class="section">
    <h2>✨ Fitur Utama</h2>
    <ul>
      <li>Manajemen produk & kategori</li>
      <li>CRUD otomatis dengan Filament</li>
      <li>Pencarian dan filter data</li>
      <li>Login admin</li>
    </ul>
  </div>

  <div class="section">
    <h2>Instalasi</h2>

    <h3>1. Clone Project</h3>
    <pre><code>git clone https://github.com/ruliawan/test_web_ihp.git
cd test_web_ihp
composer install
npm install &amp;&amp; npm run build
cp .env.example .env
php artisan key:generate
php artisan serve
</code></pre>

    <h3>2. Konfigurasi Database di <code>.env</code></h3>
    <p>Buka file <code>.env</code>, lalu sesuaikan bagian database seperti ini:</p>
    <pre><code>DB_CONNECTION=mysql          # Jenis database, biasanya mysql
DB_HOST=127.0.0.1            # Server database, biasanya localhost
DB_PORT=3306                 # Port database, default MySQL adalah 3306
DB_DATABASE=produk_db        # Nama database yang sudah kamu buat
DB_USERNAME=root             # Username database (misal: root)
DB_PASSWORD=                 # Password user database (kosong jika tidak ada)
</code></pre>

    <p>
      <strong>Catatan:</strong>
    </p>
    <ul>
      <li>Buat database baru di MySQL yaitu <code>db_singer</code></li>
      <li>Import file <code>db_singer.sql</code> ke database tersebut (pakai phpMyAdmin atau sejenisnya)</li>
    </ul>

    <h3>3. Setup Database</h3>
    <ul>
      <li>Buat database baru di MySQL yaitu <code>db_singer</code></li>
      <li>Import file <code>db_singer.sql</code> ke database tersebut (pakai phpMyAdmin atau tools lain)</li>
    </ul>

    <h3>4. Jalankan Server Laravel</h3>
    <p>Jalankan perintah ini untuk memulai server lokal Laravel:</p>
    <pre><code>php artisan serve
</code></pre>
    <p>Biasanya server berjalan di alamat:</p>
    <p><code>http://localhost:8000</code> atau <code>http://127.0.0.1:8000</code></p>

    <h3>5. Akses Aplikasi</h3>
    <p>Buka browser dan akses:</p>
    <ul>
      <li>Halaman depan aplikasi (jika ada):<br />
      <code>http://localhost:8000</code> atau <code>http://127.0.0.1:8000</code></li>
      <li>Panel admin (Filament):<br />
      <code>http://localhost:8000/admin</code> atau <code>http://127.0.0.1:8000/admin</code></li>
    </ul>

    <h3>6. Login Admin</h3>
    <p>Gunakan akun default:</p>
    <ul>
      <li>Email: <code>admin@gmail.com</code></li>
      <li>Password: <code>password</code></li>
    </ul>
  </div>

</body>
</html>


