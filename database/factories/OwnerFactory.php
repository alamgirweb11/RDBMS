<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OwnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
               'car_id' => rand(1,10),
               'name' => $this->faker->name,
               'phone' => $this->faker->phoneNumber,
        ];
    }
}
