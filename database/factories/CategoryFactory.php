<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->text($maxNbChars = 25);
        return [
              'name' => $name,
              'slug' => Str::slug($name, '-'),
              'status' => rand(0,1)
        ];
    }
}
