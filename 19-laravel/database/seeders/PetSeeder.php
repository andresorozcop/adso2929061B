<?php

namespace Database\Seeders;

use App\Models\Pet;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kindIndex = ['cat' => 0, 'dog' => 0, 'bird' => 0, 'pig' => 0];

        $rows = [
            ['name' => 'Luna', 'kind' => 'cat', 'weight' => 3.2, 'age' => 1, 'breed' => 'Azul ruso', 'location' => 'Cartagena', 'description' => 'juguetona y curiosa con los visitantes'],
            ['name' => 'Simba', 'kind' => 'dog', 'weight' => 9.0, 'age' => 3, 'breed' => 'Beagle', 'location' => 'Barranquilla', 'description' => 'le gusta olfatear en los paseos matutinos'],
            ['name' => 'Misha', 'kind' => 'cat', 'weight' => 4.8, 'age' => 4, 'breed' => 'British Shorthair', 'location' => 'Pereira', 'description' => 'prefiere rincones tranquilos y ventanas soleadas'],
            ['name' => 'Kira', 'kind' => 'dog', 'weight' => 11.5, 'age' => 6, 'breed' => 'Border Collie', 'location' => 'Bucaramanga', 'description' => 'necesita espacio y juegos de agilidad'],
        ];

        foreach ($rows as $row) {
            $kind = $row['kind'];
            $idx = $kindIndex[$kind]++;
            $pet = new Pet;
            $pet->fill($row);
            $pet->image = Pet::pickImagePathForKind($kind, $idx);
            $pet->save();
        }
    }
}
