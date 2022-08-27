<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'phone' => $this->faker->phoneNumber,
            'city' => $this->faker->city,
            'post_code' => $this->faker->postcode,
            'country' => $this->faker->country,
        ];
    }
}
