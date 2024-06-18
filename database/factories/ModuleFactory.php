<?php

namespace Database\Factories;

use App\Models\Module;
use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModuleFactory extends Factory
{
    protected $model = Module::class;

    public function definition()
    {
      $topicIds = Topic::pluck('id')->all();

        return [
            'module_name' => $this->faker->word,
            'module_description' => $this->faker->sentence,
            'topic_id' => $this->faker->randomElement($topicIds),
        ];
    }
}
