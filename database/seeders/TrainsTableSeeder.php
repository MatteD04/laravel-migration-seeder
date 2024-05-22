<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 15; $i++) {
            $newHouse = new House();
            $newHouse->Azienda = 'TrenItalia';
            $newHouse->Codice_Treno = $faker->ean13();
            $newHouse->Stazione_di_partenza = $faker->city();
            $newHouse->Stazione_di_arrivo = $faker->city();
            $newHouse->orario_di_partenza = $faker->dateTime();
            $newHouse->orario_di_arrivo = $faker->dateTime();
            $newHouse->numero_di_carrozze = $faker->numberBetween(1, 50);
            $newHouse->in_orario = $faker->randomElement([1, 0]);
            $newHouse->cancellato = $faker->randomElement([1, 0]);

            $newHouse->save();
        }
    }
}