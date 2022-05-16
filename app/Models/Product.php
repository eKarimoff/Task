<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product_Material;
class Product extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $table = 'products';

    public function products_marterials()
    {
        return $this->hasMany(Product_Material::class);
    }

    public function material()
    {
        return $this->BelongsTo(Material::class);
    }
}
