<?php

namespace Database\Factories;

use App\Models\Student;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' =>$this ->faker->name(),
            'surname' =>$this ->faker->name(),
            'identification'=>$this ->faker->numberbetween(100000000,999999999),
            'cellphone'=>$this ->faker->numberbetween(900000000,1000000000),
            'email'=>$this->faker->safeEmail(),
            'gender'=>$this ->faker->randomElement(['F','M']),
        ];
    }
}
