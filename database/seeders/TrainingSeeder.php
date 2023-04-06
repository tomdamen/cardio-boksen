<?php

namespace Database\Seeders;

use App\Models\Fighter;
use App\Models\Training;
use Illuminate\Database\Seeder;
use Database\Factories\TrainingFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $allFighterIds = Fighter::getAllFighterIds()->toArray();
        for ($i = 1; $i < 10; $i++)  {
            $training = Training::create([
                'date' => fake()->date(),
                'start_time' => fake()->time(),
                'end_time' => fake()->time(),
                'training_type_id' => fake()->randomDigitNotZero(),]);

                $randomKeys = array_rand($allFighterIds, rand(2,15));
                $newEntry = [];
                foreach ($randomKeys as $key) {
                    array_push($newEntry,$allFighterIds[$key]);
                }                
                $training->fighters()->sync($newEntry);
            
        }
    }
}
