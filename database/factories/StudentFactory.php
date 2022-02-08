<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model= \App\Models\Student::class;
    public function definition()
    {
        return [
            'First_name' => $this->faker->name(),
            // 'Last_name' => $this->faker->name(),
           'email' => $this->faker->unique()->safeEmail(),


           'Admission_number'=>$this->faker->numerify('CCS/###/2019'), //expected admission be CCS/01234/2021
            // 'created_at' => now(),
            // 'updated_at' => now(),

        ];
    }
}
