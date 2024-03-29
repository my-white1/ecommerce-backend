<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "category_id" => rand(1 , 5),
            "name" => fake()->sentence(3),
            "price" => rand(50000 , 10000000),
            "description" => fake()->paragraph(5),
        ];
    }
}
