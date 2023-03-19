<?php

namespace Database\Seeders;

use App\Models\Fighter;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FighterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fighter::factory(20)->create();
    }
}
