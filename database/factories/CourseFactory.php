<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'study_program_id' => 1,
            'semester_id' => 1,
            'prerequisite' => 1,
            'code' => $this->faker->lexify('?????'),
            'name' => $this->faker->word(),
            'sks' => $this->faker->randomDigitNot(0),
            'is_teori' => $this->faker->boolean(),
            'hours' => $this->faker->randomDigitNot(0),
            'is_wajib' => $this->faker->boolean(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
