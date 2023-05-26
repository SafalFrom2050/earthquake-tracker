<?php

namespace Database\Seeders;

use App\Models\Earthquake;
use Illuminate\Database\Seeder;

class EarthquakeSeeder extends Seeder
{
    public function run(): void
    {
        Earthquake::factory()
            ->count(50)
            ->create();
    }
}
