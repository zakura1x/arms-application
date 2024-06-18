<?php

namespace Database\Factories;

use App\Models\Faculty;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacultyFactory extends Factory
{
    protected $model = Faculty::class;

    public function definition()
    {
      $userIds = User::pluck('id')->all();

        return [
            'user_id' => $this->faker->unique()->randomElement($userIds),
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'id_number' => $this->faker->unique()->numerify('FAC###'),
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->phoneNumber,
            'birth_date' => $this->faker->date,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'address' => $this->faker->address,
        ];
    }
}
