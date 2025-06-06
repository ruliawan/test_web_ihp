<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource; // Menghubungkan dengan resource produk
use Filament\Actions; // Untuk aksi seperti tombol hapus
use Filament\Resources\Pages\EditRecord; // Halaman bawaan Filament untuk edit data

class EditProduct extends EditRecord
{
    // Menyatakan halaman ini milik resource ProductResource
    protected static string $resource = ProductResource::class;

    /**
     * Tombol-tombol yang tampil di bagian atas halaman edit.
     * Di sini kita menampilkan tombol hapus produk.
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(), // Tombol hapus di halaman edit
        ];
    }

    /**
     * Setelah data produk berhasil diedit, user diarahkan ke halaman daftar produk.
     */
    protected function getRedirectUrl(): string
    {
        // Redirect kembali ke list produk
        return $this->getResource()::getUrl('index');
    }
}
