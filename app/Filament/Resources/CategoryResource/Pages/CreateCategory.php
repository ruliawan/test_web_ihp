<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource; // Menghubungkan ke resource kategori utama
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord; // Kelas bawaan Filament untuk halaman "tambah data"

class CreateCategory extends CreateRecord
{
    // Menentukan bahwa halaman ini milik resource CategoryResource
    protected static string $resource = CategoryResource::class;

    /**
     * Fungsi ini dijalankan setelah data berhasil ditambahkan.
     * Di sini kita mengatur agar user langsung diarahkan kembali ke halaman daftar kategori.
     */
    protected function getRedirectUrl(): string
    {
        // Arahkan kembali ke halaman index (list kategori)
        return $this->getResource()::getUrl('index');
    }
}
