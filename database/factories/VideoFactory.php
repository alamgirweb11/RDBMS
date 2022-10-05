<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $slug = Str::slug($title, '-');
        return [
              'user_id' => rand(1, 10),
              'title' => $title,
              'slug' => $slug,
              'source_url' => 'https://www.youtube.com/watch?v=9em32dDnTck&ab_channel=Valkeir',
              'video' => null,
              'status' => 1
        ];
    }
}
