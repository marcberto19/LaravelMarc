<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Knifes;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Knifes>
 */
class KnifesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Knifes::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->word(),
            'tipus' => $this->faker->word(),
            'float' => $this->faker->randomFloat(2, 1, 12), // Genera un número decimal entre 1 y 12
            'lock' => $this->faker->word(),
            'preu' => $this->faker->randomFloat(2, 10, 1000), // Genera un precio entre 10 y 1000
        ];
    }
}

