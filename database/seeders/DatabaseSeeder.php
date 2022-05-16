<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('MaterialSeeder');
        $this->call('ProductSeeder');
        $this->call('Products_MaterialSeeder');
        $this->call('WarehouseSeeder');
    }
}
