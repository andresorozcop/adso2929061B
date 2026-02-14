<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pets')->insert(
            [
                [
                    'name' => 'Firulais',
                    'image' => 'no-image.png',
                    'kind' => 'Perro',
                    'weight' => 12.5,
                    'age' => 3,
                    'breed' => 'Criollo',
                    'location' => 'Villamaria',
                    'description' => 'Es juicioso pero se asusta con ruidos fuertes.',
                    'active' => 1,
                    'adopted' => 0,
                ],
                [
                    'name' => 'Michi',
                    'image' => 'no-image.png',
                    'kind' => 'Gato',
                    'weight' => 4.2,
                    'age' => 2,
                    'breed' => 'Criollo',
                    'location' => 'Manizales',
                    'description' => 'Le gusta dormir todo el dia y es muy cariñoso.',
                    'active' => 1,
                    'adopted' => 0,
                ],
                [
                    'name' => 'Luna',
                    'image' => 'no-image.png',
                    'kind' => 'Perro',
                    'weight' => 8.0,
                    'age' => 1,
                    'breed' => 'Pincher',
                    'location' => 'Pereira',
                    'description' => 'Es pequeña y ladra bastante pero es buena.',
                    'active' => 1,
                    'adopted' => 0,
                ],
                [
                    'name' => 'Rocky',
                    'image' => 'no-image.png',
                    'kind' => 'Perro',
                    'weight' => 20.3,
                    'age' => 5,
                    'breed' => 'Labrador',
                    'location' => 'La Dorada',
                    'description' => 'Le gusta jugar con la pelota y no es agresivo.',
                    'active' => 1,
                    'adopted' => 0,
                ],
                [
                    'name' => 'Nala',
                    'image' => 'no-image.png',
                    'kind' => 'Gato',
                    'weight' => 3.6,
                    'age' => 4,
                    'breed' => 'Siames',
                    'location' => 'Neira', 
                    'description' => 'Es seria al principio pero despues se deja cargar.',
                    'active' => 1,
                    'adopted' => 0,
                ],
            ]
        );
    }
}
