<?php

namespace Database\Seeders;

use App\Models\Lecter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class LectersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newLecter = new Lecter();
            $newLecter->childrenName = $faker->word();
            $newLecter->childrenSurname = $faker->word();
            $newLecter->adress = $faker->sentence(3, false);
            $newLecter->city = $faker->city();
            $newLecter->arrivalDate = $faker->date();
            $newLecter->present = $faker->sentence(4, false);
            $newLecter->text = $faker->text();
            $newLecter->rating = $faker->numberBetween(1, 5);
            $newLecter->consegned = $faker->numberBetween(0, 1);
            $newLecter->save();
        }
    }
}
