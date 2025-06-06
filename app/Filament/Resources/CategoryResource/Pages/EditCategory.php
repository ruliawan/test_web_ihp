<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource; // Menghubungkan ke resource kategori
use Filament\Actions; // Untuk menambahkan tombol aksi seperti delete
use Filament\Resources\Pages\EditRecord; // Halaman bawaan Filament untuk edit data

class EditCategory extends EditRecord
{
    // Menandakan bahwa halaman ini milik resource CategoryResource
    protected static string $resource = CategoryResource::class;

    /**
     * Tombol-tombol yang ditampilkan di header halaman edit.
     * Di sini kita hanya menampilkan tombol "Hapus".
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(), // Tambahkan tombol hapus di halaman edit
        ];
    }

    /**
     * Fungsi ini akan dijalankan setelah data berhasil diedit.
     * Kita arahkan user kembali ke halaman daftar kategori.
     */
    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman list (index) kategori setelah update
        return $this->getResource()::getUrl('index');
    }
}
