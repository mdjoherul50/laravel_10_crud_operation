<?php
namespace Database\Factories;
// database/factories/ProductFactory.php

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'details' => $this->faker->paragraph,
            'phone_number' => $this->faker->phoneNumber,
        
        ];
    }
}