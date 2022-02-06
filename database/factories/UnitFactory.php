<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class UnitFactory extends Factory
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

            'unit_id'=>$this->faker->numerify('CCS-###'), // creates random admission numbers with CCS-as a prefix
            'created_at'=>now(),
            'updated_at' =>now()


        ];
    }
}
