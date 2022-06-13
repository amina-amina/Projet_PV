<?php

namespace Database\Factories;

use App\Models\Fraude;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
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
            'apogee' => $this->faker->randomNumber(9, true),
            'cin' => $this->faker->randomNumber(9, true),
            'cne' => $this->faker->word(),
            'filliere' => $this->faker->word(),
            'section' => $this->faker->word(),
            'nom' => $this->faker->firstName(),
            'prenom' => $this->faker->lastName(),
            
        ];
    }
}
