<?php

namespace App\Livewire\AdminAuth;

use Filament\Notifications\Notification; // Untuk menampilkan pesan (notifikasi) ke pengguna
use Filament\Http\Responses\Auth\Contracts\LoginResponse; // Format balasan setelah login
use Filament\Http\Livewire\Auth\Login as BaseLogin; // Fitur login bawaan dari Filament
use Illuminate\Support\Facades\Auth; // Digunakan untuk proses login dan autentikasi

class Login extends BaseLogin
{
    /**
     * Fungsi ini dijalankan saat pengguna menekan tombol "Login".
     * Di sini kita cek apakah email dan password benar, dan kirimkan notifikasi berhasil/gagal.
     */
    public function authenticate(): LoginResponse
    {
        // Ambil data dari form login (email, password, dan apakah ingin diingat atau tidak)
        $data = $this->form->getState();

        // Coba login dengan email dan password yang dimasukkan
        if (! Auth::attempt([
            'email' => $data['email'],
            'password' => $data['password'],
        ], $data['remember'] ?? false)) {
            // Kalau gagal login (email/password salah)

            // Tampilkan pesan gagal login ke layar
            Notification::make()
                ->title('Gagal Login') // Judul pesan
                ->danger() // Warna merah (tanda bahaya/gagal)
                ->body('Ada masalah saat login') // Isi pesannya
                ->send(); // Kirimkan notifikasi ke pengguna

            // Tampilkan pesan error di bawah kolom email
            $this->addError('email', __('filament-panels::pages/auth/login.form.email.errors'));

            // Tetap kembalikan hasil login (gagal) untuk menghentikan proses
            return app(LoginResponse::class);
        }

        // Kalau berhasil login

        // Buat sesi baru agar lebih aman
        session()->regenerate();

        // Tampilkan notifikasi bahwa login berhasil
        Notification::make()
            ->title('Login Berhasil!') // Judul pesan sukses
            ->success() // Warna hijau (sukses)
            ->send();

        // Kembalikan hasil login (berhasil) dan arahkan ke halaman selanjutnya (biasanya dashboard)
        return app(LoginResponse::class);
    }
}
