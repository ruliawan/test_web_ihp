<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory; // Memungkinkan penggunaan factory untuk testing atau seeding

    // Menentukan kolom primary key untuk tabel kategori
    protected $primaryKey = 'idcategories';

    // Menandakan bahwa semua kolom boleh diisi massal (tidak ada yang dilindungi)
    protected $guarded = [];

    /**
     * Relasi satu kategori dengan banyak produk.
     * 
     * Fungsi ini menghubungkan model Category dengan model Product.
     * Artinya, satu kategori bisa memiliki banyak produk.
     */
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
