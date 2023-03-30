<?php

namespace Database\Seeders;

//importamos los model de la base de datos
use App\Models\Student;
use App\Models\Level;
use App\Models\Degree;
use App\Models\Turn;
use App\Models\Section;
use App\Models\Classroom;




// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Student::factory(20)->create();
        Degree::factory(20)->create();
        Section::factory(20)->create();
        Level::factory(20)->create();
        Turn::factory(20)->create();
        Classroom::factory(20)->create();
    }
}
