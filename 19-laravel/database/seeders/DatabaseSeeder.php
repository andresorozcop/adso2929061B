<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // creo 50 usuarios uno por uno, cada uno con una foto diferente
        for ($i = 1; $i <= 50; $i++) {
            $photoName = 'user' . $i . '.png';

            \App\Models\User::factory()->create([
                'photo' => $photoName,
            ]);
        }

        $this->call([
             //UserSeeder::class,
             //PetsSeeder::class,
             AdoptionsSeeder::class,
        ]);
    }
}