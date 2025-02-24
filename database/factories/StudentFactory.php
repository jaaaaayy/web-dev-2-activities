<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'age' => fake()->numberBetween(18, 60),
            'gender' => fake()->randomElement(['male', 'female']),
<<<<<<< HEAD
            'address' => fake()->address()
=======
            'address' => fake()->address(),
>>>>>>> d6ec1b1 (Activity 3: Unfinish)
        ];
    }
}
