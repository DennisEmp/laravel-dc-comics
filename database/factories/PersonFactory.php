<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'FirstName' => fake() -> firstName($gender = null|'male'|'female'), 
            'lastName' => fake() -> lastName(),
            'dateOfBirth' => fake() -> dateTimeBetween('1900-01-01', '2023-02-06')
            ->format('d/m/Y'),
            'height' => fake() -> randomFloat(2, 100, 600),
        ];
    }
}
