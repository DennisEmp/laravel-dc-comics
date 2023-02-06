<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'FirstName' => fake() -> firstName(), 
            'lastName' => fake() -> lastName(),
            'dateOfBirth' => fake() -> dateTimeBetween('1900-01-01', '2023-02-06'),
            'height' => fake() -> randomFloat(2, 100, 600),
        ];
    }
}
