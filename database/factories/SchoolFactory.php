<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\School::class;
    public function definition()
    {
        return [
            'school_name' => $this->faker->name(),
            'S_code' => $this->faker->numerify('MSU-###'),
            'created_at' => now(),
             'updated_at' => now(),





        ];
    }
}
