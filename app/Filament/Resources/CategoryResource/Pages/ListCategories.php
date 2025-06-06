<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource; // Menghubungkan ke resource kategori
use Filament\Actions; // Untuk menggunakan tombol aksi seperti Create
use Filament\Resources\Pages\ListRecords; // Halaman bawaan dari Filament untuk menampilkan daftar data

class ListCategories extends ListRecords
{
    // Menentukan bahwa halaman ini merupakan bagian dari resource CategoryResource
    protected static string $resource = CategoryResource::class;

    /**
     * Fungsi ini digunakan untuk menampilkan tombol aksi di bagian atas halaman.
     * Di sini kita menampilkan tombol "Tambah Kategori".
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(), // Menampilkan tombol "Create" di atas tabel
        ];
    }
}
