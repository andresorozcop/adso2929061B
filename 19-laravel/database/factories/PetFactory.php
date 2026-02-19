<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->colorName(),
            'kind' => fake()->randomElement(['Dog', 'Cat', 'Bird', 'Fish']),
            'weight' => fake()->numerify('#.#'),
            'age' => fake()->numberBetween(1, 15),
            'breed' => fake()->randomElement(['Type1', 'Type2', 'Type3', 'Type4']),
            'location' => fake()->city(),
            'descrpition' => fake()->sentence(5),
        ];
    }
}
