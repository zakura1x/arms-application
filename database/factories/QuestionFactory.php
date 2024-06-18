<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\Module;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    protected $model = Question::class;

    public function definition()
    {
        return [
            'question' => $this->faker->sentence,
            'options' => json_encode([
                'A' => $this->faker->word,
                'B' => $this->faker->word,
                'C' => $this->faker->word,
                'D' => $this->faker->word,
            ]),
            'correct_answer' => 'B',
            'is_approved' => true,
            'module_id' => Module::factory(), // Assuming you have ModuleFactory
            'topic' => Topic::factory(), // Assuming you have TopicFactory
            'difficulty' => $this->faker->randomElement(['Easy', 'Medium', 'Hard']),
            'attachment_id' => null,
            'faculty_id' => User::factory()->state(['role' => 'faculty']), // Using UserFactory with faculty role
        ];
    }
}
