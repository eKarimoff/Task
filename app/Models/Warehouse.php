<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Material;
class Warehouse extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $table = 'warehouses';

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
