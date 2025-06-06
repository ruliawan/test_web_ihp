<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource; // Menghubungkan dengan resource produk
use Filament\Actions; // Untuk tombol aksi seperti "Create"
use Filament\Resources\Pages\ListRecords; // Halaman bawaan Filament untuk menampilkan daftar data

class ListProducts extends ListRecords
{
    // Menandakan halaman ini milik resource ProductResource
    protected static string $resource = ProductResource::class;

    /**
     * Tombol aksi yang tampil di header halaman daftar produk.
     * Di sini kita hanya menampilkan tombol "Tambah Produk".
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(), // Tombol "Create" untuk menambah produk baru
        ];
    }
}
