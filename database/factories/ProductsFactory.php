<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * php artisan make:factory ProductsFactory
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'image' => "default.png",
            'code' => fake()->randomKey(),
            'price' => fake()->numberBetween(10,1000),
            'description' => fake()->text(),
            'brand_id' => fake()->numberBetween(1,2),
            'category_id' => 1,
            'pharmacy_id' => fake()->numberBetween(1,12),
        ];
    }
}
