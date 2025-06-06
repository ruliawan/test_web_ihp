<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'idcategories';

    protected $guarded = [];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
