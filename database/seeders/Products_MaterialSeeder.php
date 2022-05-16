<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product_Material;
class Products_MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product_Material::create([
            'product_id'=>1,
            'material_id'=>1,
            'quantity'=>0.8,
        ]);
        Product_Material::create([
            'product_id'=>1,
            'material_id'=>4,
            'quantity'=>5,
        ]);
        Product_Material::create([
            'product_id'=>1,
            'material_id'=>2,
            'quantity'=>10,
        ]);
        Product_Material::create([
            'product_id'=>2,
            'material_id'=>1,
            'quantity'=>1.4,
        ]);
        Product_Material::create([
            'product_id'=>2,
            'material_id'=>2,
            'quantity'=>15,
        ]);
        Product_Material::create([
            'product_id'=>2,
            'material_id'=>3,
            'quantity'=>1,
        ]);
    }
}
