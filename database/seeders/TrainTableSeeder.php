<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $newTrain = new Train();
            $newTrain->company = $faker->words(3, true);
            $newTrain->departure_station = $faker->words(3, true);
            $newTrain->arrival_station = $faker->words(3, true);
            $newTrain->departure_time = $faker->dateTime();
            $newTrain->arrival_time = $faker->dateTime();
            $newTrain->train_code = $faker->bothify('#####-????');
            $newTrain->carriages = $faker->numberBetween(1, 20);
            $newTrain->on_time = $faker->numberBetween(0, 1);
            $newTrain->cancelled = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
