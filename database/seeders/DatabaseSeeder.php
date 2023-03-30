<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\FighterSeeder;
use Database\Seeders\TrainingSeeder;
use Database\Seeders\TrainingTypeSeeder;
use Database\Seeders\FighterTrainingSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(FighterSeeder::class);
        $this->call(TrainingSeeder::class);
        $this->call(FighterTrainingSeeder::class);
        $this->call(TrainingTypeSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
