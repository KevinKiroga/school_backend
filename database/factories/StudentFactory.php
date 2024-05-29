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
            'name' => $this->faker-> firstName () ,
            'last_name' => $this->faker-> lastName () ,
            'birthdate' => $this->faker-> date () ,
            'address' => $this->faker-> address () ,
        ];
    }
}
