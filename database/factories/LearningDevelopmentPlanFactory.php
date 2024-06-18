<?php

namespace Database\Factories;

use App\Models\LearningDevelopmentPlan;
use App\Models\Faculty;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class LearningDevelopmentPlanFactory extends Factory
{
    protected $model = LearningDevelopmentPlan::class;

    public function definition()
    {
        return [
            'plan_name' => $this->faker->sentence,
            'is_approved' => $this->faker->boolean,
            'faculty_id' => Faculty::factory(),
            'subject_id' => Subject::factory(),
        ];
    }
}
