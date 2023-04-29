<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserDomicilio>
 */
class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->unique()->numberBetween(1, 100),
            'domicilio' => fake()->sentence(3),
            'numero_exterior' => fake()->numberBetween(0, 100),
            'colonia' => fake()->word(),
            'cp' => fake()->numberBetween(10000, 99999),
            'ciudad' => fake()->word()
        ];
    }
}
