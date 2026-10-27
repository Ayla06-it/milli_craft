<?php

namespace Database\Factories;

use App\Models\Yaka;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Yaka>
 */
class YakaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            'cost' => fake()->numberBetween(50, 500),
            'type' => fake()->randomElement(['Stoyka yaka', 'El yaka', 'Dort-inne', 'Basma yaka', 'Wysywka yaka', 'Kanwa yaka']),
            'number' => fake()->numberBetween(861000000, 865999999),
            //
        ];
    }
}
