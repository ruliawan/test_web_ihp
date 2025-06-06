<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory; // Memudahkan pembuatan data dummy lewat factory

    // Menentukan kolom primary key pada tabel produk
    protected $primaryKey = 'idproduct';

    // Memungkinkan semua kolom bisa diisi secara massal (tidak ada yang dilindungi)
    protected $guarded = [];

    /**
     * Relasi produk dengan kategori.
     * 
     * Fungsi ini menghubungkan model Product ke model Category.
     * Artinya, setiap produk memiliki satu kategori.
     * Foreign key yang dipakai adalah 'idcategories'.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'idcategories');
    }
}
