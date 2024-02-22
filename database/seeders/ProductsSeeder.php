<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * php artisan make:seeder ProductsSeeder 
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Products::factory(1)->create();
        // SEED: php artisan db:seed --class = ProductsSeeder
    }
}
