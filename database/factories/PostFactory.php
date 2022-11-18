<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use \App\Models\User;
use \App\Models\Region;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'title' => $this->faker->sentence(),
           'body' => $this->faker->text(400),
           'preview' => $this->faker->imageUrl(300, 200),
           'user_id' => User::get()->random()->id,
           'region_id' => Region::get()->random()->id,
           'views' => random_int(0, 10000),
           'likes' => random_int(0, 10000),
           'shares' => random_int(0, 10000),
        ];
    }
}