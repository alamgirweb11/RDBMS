<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class PostFactory extends Factory
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
            'category_id' => rand(1,10),
            'title' => $title,
            'slug' => $slug,
            'thumbnail_img' => $this->faker->imageUrl,
            'description' => $this->faker->paragraphs($nb = 3, $asText = true),
            'status' => Arr::random(['pending', 'published', 'draft']),
        ];
    }
}
