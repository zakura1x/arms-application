<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Student::class;

    public function definition(): array
    {
        $id_number = $this->faker->unique()->numberBetween(1000000, 9999999);
        $formatted_id_number = substr_replace($id_number, '-', 2, 0);

        return [
            'user_id' => '1',
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'id_number' => $formatted_id_number, // Use the formatted ID number
            'email' => $this->faker->unique()->safeEmail(),
            'phone_number' => $this->faker->regexify('09[0-9]{9}'), // Generate phone number in "09XXXXXXXXX" format
            'birth_date' => $this->faker->date('Y-m-d'),
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'address' => $this->faker->address(),
        ];
    }
}
