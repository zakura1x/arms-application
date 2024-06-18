<?php

namespace Database\Factories;

use App\Models\Topic;
use App\Models\LearningDevelopmentPlan;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopicFactory extends Factory
{
    protected $model = Topic::class;

    public function definition()
    {
      $ldpIds = LearningDevelopmentPlan::pluck('id')->all();

        return [
            'topic_name' => $this->faker->word,
            'topic_description' => $this->faker->sentence,
            'learning_development_plan_id' => $this->faker->unique()->randomElement($ldpIds),
        ];
    }
}
