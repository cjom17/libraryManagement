<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrower>
 */
class BorrowerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    
    {
        return [
            'borrower_name' => $this->faker->name,
            'borrower_age' => $this->faker->randomDigit,
            'borrower_section' => $this->faker->word,
        ];
    }
}