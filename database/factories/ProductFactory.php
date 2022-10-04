<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "name" => $this->faker->colorName(),
            "price" => $this->faker->numberBetween(500, 1000),
            "quantity" => $this->faker->numberBetween(10, 30),
            "image" => $this->faker->imageUrl(),
            "status" => 1



        ];
    }
}
