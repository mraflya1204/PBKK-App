<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ninja>
 */
class NinjaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake('ja_JP')->name(),
            'age' => fake()->numberBetween(18, 60),
            'specialty' => fake()->randomElement(['Stealth', 'Espionage','Assasination','Martial Arts','Thievery',]),
            'skill' => fake()->numberBetween(30, 100),
            'bio' => fake()->realText(500),
        ];
    }
}
