<?php

namespace Database\Seeders;

use App\Models\LearningDevelopmentPlan;
use Illuminate\Database\Seeder;

class LearningDevelopmentPlanSeeder extends Seeder
{
    public function run(): void
    {
        LearningDevelopmentPlan::factory()->count(10)->create();
    }
}
