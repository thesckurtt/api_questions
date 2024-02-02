<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $alternatives = ['a', 'b', 'c', 'd'];
        $alternative_random = $alternatives[rand(0, 3)];

        return [
        'user_id' => 1,
        'question_name' => "Lorem Ipsum Dolor",
        'question_text' => fake()->text() . "?",
        'question_alternative_01' => fake()->text() . "?",
        'question_alternative_02' =>  fake()->text() . "?",
        'question_alternative_03' => fake()->text() . "?",
        'question_alternative_04' => fake()->text() . "?",
        'question_alternative_correct' => $alternative_random,
        ];
    }
}
