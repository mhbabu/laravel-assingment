<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'name'              => fake()->name(),
            'user_type'         => rand(3, 4),
            'email'             => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password'          => bcrypt('12345678'), // password
            'created_at'        => now(),
            'created_by'        => 1,
            'updated_at'        => now(),
            'updated_by'        => 1,
            'remember_token'    => Str::random(10),
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
