<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use \App\Models\User;
use \App\Models\Region;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\History>
 */
class HistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'tag' => fake()->word(),
            'body' => fake()->text(400),
            'preview' => fake()->imageUrl(300, 200),
            'user_id' => User::get()->random()->user_id,
            'region_id' => Region::get()->random()->region_id,
            'views' => random_int(0, 10000),
            'likes' => random_int(0, 10000),
            'shares' => random_int(0, 10000),
        ];
    }
}