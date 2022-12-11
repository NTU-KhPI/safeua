<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Region;
use \App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tag' => fake()->word(),
            'user_id' => User::get()->random()->user_id,
            'region_id' => Region::get()->random()->region_id,
            // 'file_location' => $this->faker->imageUrl(1920, 1080)
            'file_location' => "/storage/photo/photo_" . random_int(1, 12) . ".png"
         ];
    }
}