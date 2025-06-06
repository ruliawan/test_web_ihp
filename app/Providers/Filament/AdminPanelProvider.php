<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate; // Middleware untuk mengecek apakah user sudah login
use Filament\Http\Middleware\AuthenticateSession; // Menjaga sesi login tetap aktif
use Filament\Http\Middleware\DisableBladeIconComponents; // Menonaktifkan komponen ikon Blade bawaan jika tidak digunakan
use Filament\Http\Middleware\DispatchServingFilamentEvent; // Memicu event saat Filament mulai diakses
use Filament\Pages; // Namespace halaman-halaman default dari Filament
use Filament\Panel; // Representasi satu panel Filament
use Filament\PanelProvider; // Kelas dasar untuk membuat konfigurasi panel
use Filament\Support\Colors\Color; // Digunakan untuk memilih warna tema
use Filament\Widgets; // Namespace widget bawaan Filament
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse; // Menambahkan cookie ke response HTTP
use Illuminate\Cookie\Middleware\EncryptCookies; // Mengenkripsi cookie
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken; // Melindungi aplikasi dari serangan CSRF
use Illuminate\Routing\Middleware\SubstituteBindings; // Menghubungkan route model binding
use Illuminate\Session\Middleware\StartSession; // Memulai sesi Laravel
use Illuminate\View\Middleware\ShareErrorsFromSession; // Menampilkan error validasi dari session ke view
use App\Livewire\AdminAuth\Login; // Menggunakan form login kustom buatan kita

class AdminPanelProvider extends PanelProvider
{
    /**
     * Fungsi ini akan mengatur seluruh konfigurasi panel admin Filament.
     */
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default() // Gunakan konfigurasi default panel
            ->id('admin') // ID unik untuk panel ini
            ->path('admin') // URL akses ke panel admin, misalnya: /admin
            ->login(Login::class) // Gunakan halaman login yang kita buat sendiri (custom login)
            ->colors([
                'primary' => Color::Amber, // Atur warna utama panel menjadi amber (kuning-oranye)
            ])
            ->discoverResources(
                in: app_path('Filament/Resources'), // Cari resource otomatis di folder ini
                for: 'App\\Filament\\Resources' // Namespace resource-nya
            )
            ->discoverPages(
                in: app_path('Filament/Pages'), // Cari halaman otomatis di folder ini
                for: 'App\\Filament\\Pages' // Namespace halaman-nya
            )
            ->pages([
                Pages\Dashboard::class, // Daftarkan halaman dashboard bawaan Filament
            ])
            ->discoverWidgets(
                in: app_path('Filament/Widgets'), // Cari widget otomatis di folder ini
                for: 'App\\Filament\\Widgets' // Namespace widget-nya
            )
            ->widgets([
                Widgets\AccountWidget::class, // Tampilkan widget akun pengguna (profile, logout, dll)
                Widgets\FilamentInfoWidget::class, // Widget info versi dan sistem Filament
            ])
            ->middleware([
                EncryptCookies::class, // Enkripsi semua cookie
                AddQueuedCookiesToResponse::class, // Tambahkan cookie ke response
                StartSession::class, // Mulai session Laravel
                AuthenticateSession::class, // Jaga agar sesi login tetap aman
                ShareErrorsFromSession::class, // Tampilkan error dari session ke halaman
                VerifyCsrfToken::class, // Lindungi dari serangan CSRF
                SubstituteBindings::class, // Hubungkan route model binding
                DisableBladeIconComponents::class, // Nonaktifkan ikon Blade jika tidak digunakan
                DispatchServingFilamentEvent::class, // Jalankan event saat panel mulai diload
            ])
            ->authMiddleware([
                Authenticate::class, // Cek apakah pengguna sudah login untuk mengakses halaman
            ]);
    }
}

