<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guitar>
 */
class GuitarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model' => fake()->name,
            'make' => fake()->name,
            'color' => fake()->colorName(),
            'strings' => '7',
            'price' => 899.99,
        ];
    }
}
