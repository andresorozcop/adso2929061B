<?php

namespace Database\Seeders;

use App\Models\Adoption;
use App\Models\Pet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdoptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adopt = new Adoption;
        $adopt->user_id = 2;
        $adopt->pet_id = 7;
        if($adopt->save()){
            $pet = Pet::find(7);
            $pet->adopted = 1;
            $pet->save();
        }
        $adopt = new Adoption;
        $adopt->user_id = 2;
        $adopt->pet_id = 9;
        if($adopt->save()){
            $pet = Pet::find(9);
            $pet->adopted = 1;
            $pet->save();
        }

    }
}
