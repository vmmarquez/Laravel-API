<?php

namespace Database\Factories;

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
            'name' => $this->faker->name(),
            'birth_date' => $this->faker->date(),
            'status' => $this->faker->boolean(),
            'user_id'=> \App\Models\User::inRandomOrder()->first()->id
        ];
    }
}