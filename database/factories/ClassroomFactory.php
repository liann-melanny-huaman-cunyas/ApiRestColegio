<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

//importamos los model de la base de datos
use App\Models\Student;
use App\Models\Level;
use App\Models\Degree;
use App\Models\Turn;
use App\Models\Section;

class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $student = Student::all()->random();
        $degree = Degree::all()->random();
        $section = Section::all()->random();
        $level = LeveL::all()->random();
        $turn = Turn::all()->random();


        return [
            'student_id' => $student->id,
            'degree_id' => $degree->id,
            'section_id' => $section->id,
            'level_id' => $level->id,
            'turn_id' => $turn->id,

        ];
    }
}
