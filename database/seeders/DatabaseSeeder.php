<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create 20 fake products
        Product::factory()->count(10)->create();
    }
}