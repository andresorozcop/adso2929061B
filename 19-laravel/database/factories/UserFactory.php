<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
26        return [
27            'document'          => fake()->numerify('75######'),
28            'fullname'          => fake()->firstName() . ' ' . fake()->
29            'gender'            => fake()->randomElement(['Female'
30            'birthdate'         => fake()->date(),
31            'phone'             => fake()->numerify('320########'),
32            'email'             => fake()->unique()->safeEmail(),
33            'email_verified_at' => now(),
34            'password'          => bcrypt('12345'),
35            'remember_token'    => Str::random(10),
36        ];
37    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
