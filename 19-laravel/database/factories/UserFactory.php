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
        // genero el genero del usuario, puede ser Male o Female
        $gender = fake()->randomElement(['Male', 'Female']);

        // dependiendo del genero, escojo un nombre masculino o femenino
        if ($gender == 'Male') {
            $firstName = fake()->firstNameMale();
        } else {
            $firstName = fake()->firstNameFemale();
        }

        // genero el apellido y el nombre completo
        $lastName = fake()->lastName();
        $fullName = $firstName . ' ' . $lastName;

        // fecha de nacimiento entre 1974 y 2004
        $birthdate = fake()->dateTimeBetween('1974-01-01', '2004-12-31')->format('Y-m-d');

        // escojo una foto segun el genero del usuario usando user1.jpg a user50.jpg
        if ($gender == 'Male') {
            // para hombres uso fotos user1.jpg hasta user25.jpg
            $photoNumber = fake()->numberBetween(1, 25);
        } else {
            // para mujeres uso fotos user26.jpg hasta user50.jpg
            $photoNumber = fake()->numberBetween(26, 50);
        }

        $photo = 'user' . $photoNumber . '.jpg';

        return [
            'document'          => fake()->numerify('75######'),
            'fullname'          => $fullName,
            'gender'            => $gender,
            'birthdate'         => $birthdate,
            'phone'             => fake()->numerify('320########'),
            'email'             => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password'          => bcrypt('12345'),
            'remember_token'    => Str::random(10),
            'photo'             => $photo,
        ];
    }

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
