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
 //Relationship:
 // Pet has one Adoption

 public function adoption() {

    return $this->hasOne(Adoption::class);
 }


 > $user->document = 666
 = 666

 > $user
 = App/Models/User {#5388
    document: 666,
 }

 > $user->fullname = 'Demonoid'
 = "Demonoid"

 > $user->gender = 'Male'
 = "Male"

 > $user->birthdate = '1996-06-06'
    = "1996-06-06"  

> $user->phone = '3666666666'
= "3666666666"

> $user->email = 'demon666@gmail.com'
= "demon666@gmail.com"

> $user->password = bcrypt('123')
=""

> User::find(53)
= null

> $user->adoptions
= 

> $adop = Adoption:: find(1)
