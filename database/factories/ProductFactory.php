<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'ECOVOLT Urban',
                'ECOVOLT City',
                'ECOVOLT Move',
                'ECOVOLT Flow',
                'ECOVOLT Ride'
            ]),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2, 5000, 25000),
            'category_id' => Category::inRandomOrder()->first()->id
        ];
    }
}