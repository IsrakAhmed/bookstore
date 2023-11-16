<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'  => $this->faker->sentence,
            'author' => $this->faker->name,
            'isbn'   => $this->faker->isbn10,
            'price'  => $this->faker->randomFloat(2, 10, 100),
            'stock'  => $this->faker->numberBetween(1, 100),
        ];
    }
}
