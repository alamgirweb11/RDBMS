<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $model = 'Tesla - '.rand(1,10);
        return [
              'mechanic_id' => rand(1,10),
              'model' => $model
        ];
    }
}
