<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Career>
 */
class CareerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'salary_low' => fake()->numberBetween(18000,20000),
            'salary_medium' => fake()->numberBetween(21000,25000),
            'salary_high' => fake()->numberBetween(26000,40000)
        ];
    }
}
