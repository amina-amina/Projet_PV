<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class FraudeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'reference' => $this->faker->randomNumber(9, true),
            'type' => $this->faker->name(),
            'matiere' => $this->faker->word(),
            'date' => $this->faker->date(),
            'lieu' => $this->faker->randomNumber(9, true),
            'heure' => $this->faker->time(),
            'surveillant' => $this->faker->name(),
            'note' => $this->faker->word(),
            'image' => $this->faker->ImageUrl($width=1920,$height=1280),
            'student_id'=>Student::pluck('id')->random()
        ];
    }
}
