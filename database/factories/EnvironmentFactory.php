<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EnvironmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'project_id' => rand(1,15),
             'name' => $this->faker->sentence($nbWords = 5, $variableNbWords = true),
        ];
    }
}
