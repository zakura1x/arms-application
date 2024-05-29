<?php

namespace Database\Factories;

use App\Models\Question;
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
    protected $model = Question::class;
    public function definition(): array
    {
        return [
            'faculty_id' => 2,
            'topic_id' => 1,
            'question_text' => $this->faker->sentence,
            'options' => json_encode([
                'A' => $this->faker->sentence,
                'B' => $this->faker->sentence,
                'C' => $this->faker->sentence,
                'D' => $this->faker->sentence,
            ]),
            'correct_answer' => 'A',
            'is_approved' => 1,
        ];
    }
}
