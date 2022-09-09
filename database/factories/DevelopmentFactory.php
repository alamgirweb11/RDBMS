<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DevelopmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
            return [
                'environment_id' => rand(1,15),
                'commit_hash' => $this->generateRandomString(25),
            ];
        }
        protected function generateRandomString($length = 25) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
}
