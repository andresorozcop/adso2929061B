<?php

namespace Database\Factories;

use App\Models\Pet;
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
        $petNames = ['Amapola', 'Bambú', 'Canela', 'Duna', 'Espiga', 'Fénix', 'Galleta', 'Hada', 'Ícaro', 'Jade', 'Kiwi', 'Lirio', 'Mostaza', 'Níspero', 'Orion', 'Paloma', 'Quinoa', 'Roció', 'Sésamo', 'Tulipán', 'Uva', 'Vega', 'Waffle', 'Xena', 'Yerba', 'Zafiro', 'Albahaca', 'Brizna', 'Ciruelo', 'Dátil', 'Eclipse', 'Ficus', 'Ginkgo', 'Hibisco', 'Iris', 'Jazmín', 'Kelp', 'Lúpulo', 'Mirra', 'Olivo', 'Pétalo', 'Quetzal', 'Rábano', 'Trigo', 'Umbra', 'Verbena', 'Violeta', 'Yuca', 'Zarza', 'Arándano', 'Biznaga', 'Carambolo', 'Dalia', 'Ébano', 'Fresno'];
        $dogBreeds = ['Mestizo', 'Cocker Spaniel', 'Husky Siberiano', 'Chihuahua', 'Dálmata'];
        $catBreeds = ['Abisinio', 'Esfinge', 'Noruego del bosque', 'Oriental', 'Somali'];
        $pigBreeds = ['Berkshire', 'Large White', 'Tamworth', 'Vietnamita', 'Wessex'];
        $birdBreeds = ['Agaporni', 'Cotorra', 'Loro gris africano', 'Ninfa', 'Pinzón'];

        $kind = fake()->randomElement(['dog', 'cat', 'bird', 'pig']);

        switch ($kind) {
            case 'dog':
                $breed = fake()->randomElement($dogBreeds);
                break;
            case 'cat':
                $breed = fake()->randomElement($catBreeds);
                break;
            case 'pig':
                $breed = fake()->randomElement($pigBreeds);
                break;
            default:
                $breed = fake()->randomElement($birdBreeds);
                break;
        }

        return [
            'name' => fake()->randomElement($petNames),
            'kind' => $kind,
            'image' => Pet::pickRandomImagePathForKind($kind),
            'weight' => fake()->numerify('#.#'),
            'age' => fake()->numberBetween(1, 15),
            'breed' => $breed,
            'location' => fake()->city(),
            'description' => fake()->sentence(5),
        ];
    }
}
