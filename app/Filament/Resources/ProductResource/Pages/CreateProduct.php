<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource; // Menghubungkan ke resource produk utama
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord; // Halaman bawaan Filament untuk tambah data baru

class CreateProduct extends CreateRecord
{
    // Menandakan halaman ini milik resource ProductResource
    protected static string $resource = ProductResource::class;

    /**
     * Setelah data produk berhasil disimpan,
     * fungsi ini mengarahkan pengguna kembali ke halaman daftar produk.
     */
    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman index produk
        return $this->getResource()::getUrl('index');
    }
}
