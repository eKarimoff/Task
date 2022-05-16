<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product_Marterial;
use App\Models\Warehouse;

class Material extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $table = 'materials';

    public function products_marterials()
    {
        return $this->hasMany(Product_Marterial::class);
    }

    public function warehouses()
    {
        return $this->hasMany(Warehouse::class);
    }
}
