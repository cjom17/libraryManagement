<?php

namespace Database\Factories;

use App\Models\Borrower;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'book_title' => 'Outerspace',
            'book_category' => $this->faker->word,
            'book_author' => $this->faker->name,
            'borrower_id'=> Borrower::first(),
        ];
    }
}