<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hour>
 */
class HourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'start_time' => fake()->time('H:i'),
            'end_time' => fake()->time("H:m"),
            'day' => fake()->dayOfWeek(),
            'week' => fake()->randomDigitNotNull(),
            'total' => fake()->randomFloat(2, 0, 120),
        ];
    }
}
