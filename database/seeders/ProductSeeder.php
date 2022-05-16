<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

public function run()
{
    Product::create([
        'product_name'=>'Ko\'ylak',
        'product_code'=>'code'
    ]);
    Product::create([
        'product_name'=>'Shim',
        'product_code'=>'code'
    ]);
   
}

}
