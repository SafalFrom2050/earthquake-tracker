<?php

namespace Database\Factories;

use App\Models\Earthquake;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class EarthquakeFactory extends Factory
{
    protected $model = Earthquake::class;

    public function definition(): array
    {
        return [
            'disaster_type' => $this->faker->word(),
            'incident_count' => $this->faker->randomNumber(),
            'incident_date' => Carbon::now(),
            'remarks' => $this->faker->realText(),
            'human_male' => $this->faker->randomDigitNotNull(),
            'human_female' => $this->faker->randomDigitNotNull(),
            'human_others' => $this->faker->randomDigitNotNull(),
            'infrastructure_house' => $this->faker->randomDigitNotNull(),
            'infrastructure_hospital' => $this->faker->randomDigitNotNull(),
            'infrastructure_school' => $this->faker->randomDigitNotNull(),
            'infrastructure_office_building' => $this->faker->randomDigitNotNull(),
            'infrastructure_others' => $this->faker->randomDigitNotNull(),
            'animal_cow' => $this->faker->randomDigitNotNull(),
            'animal_buffalo' => $this->faker->randomDigitNotNull(),
            'animal_goat_sheep' => $this->faker->randomDigitNotNull(),
            'animal_hen_chicken' => $this->faker->randomDigitNotNull(),
        ];
    }
}
