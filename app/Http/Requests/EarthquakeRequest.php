<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EarthquakeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'disaster_type' => ['required'],
            'incident_count' => ['required', 'integer'],
            'incident_date' => ['required', 'date'],
            'remarks' => ['nullable'],
            'human_male' => ['nullable', 'integer'],
            'human_female' => ['nullable', 'integer'],
            'human_others' => ['nullable', 'integer'],
            'infrastructure_house' => ['nullable', 'integer'],
            'infrastructure_hospital' => ['nullable', 'integer'],
            'infrastructure_school' => ['nullable', 'integer'],
            'infrastructure_office_building' => ['nullable', 'integer'],
            'infrastructure_others' => ['nullable', 'integer'],
            'animal_cow' => ['nullable', 'integer'],
            'animal_buffalo' => ['nullable', 'integer'],
            'animal_goat_sheep' => ['nullable', 'integer'],
            'animal_hen_chicken' => ['nullable', 'integer'],
        ];
    }
}
