<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class UnitsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Units::class;

    public function definition()
    {
        return [

            'unit_id'=>$this->faker->numerify('CCS-###'),
            'created_at'=>now(),
            'updated_at' =>now()


        ];
    }
}
