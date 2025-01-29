<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
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
            'author' => fake()->name(),
            'releaseYear' => fake()->numberBetween(1900, 2025),
            'genre' => fake()->name(),
            'preu' => fake()->numberBetween(1, 100),
        ];
    }
}
