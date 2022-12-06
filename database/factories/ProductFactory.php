<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->sentence(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(100, 999)

        ];
    }
}