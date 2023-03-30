<?php

namespace Database\Seeders;

use App\Models\TrainingType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TrainingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i<=10; $i++) {
        TrainingType::insert([
            'description' => "training ".$i,
        ]);
        };
    }
}
