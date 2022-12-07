<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'role' => fake()->randomElement(['user', 'manager', 'admin']),
            'name_f' => fake()->firstName(),
            'name_s' => fake()->lastname(),
            'volunteer' => fake()->boolean(),
            'sex' => fake()->randomElement(['male', 'female', 'not_decided']),
            'birthday' => fake()->date('Y-m-d'),
            'phone' => fake()->phoneNumber(),
            'phone2' => fake()->phoneNumber(),
            'city_id' => City::get()->random()->city_id,
            'about_me' => fake()->text(),
            'hide_avatar' => fake()->boolean(),
            'hide_name' => fake()->boolean(),
            'hide_sex' => fake()->boolean(),
            'hide_birthday' => fake()->boolean(),
            'hide_phone' => fake()->boolean(),
            'hide_native_city' => fake()->boolean(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => fake()->password(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}