<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Importamos el controller de la API
use App\Http\Controllers\Api\ClassroomController as Classroom;
use App\Http\Controllers\Api\StudenController as Student;
use App\Http\Controllers\Api\DegreeController as Degree;
use App\Http\Controllers\Api\SectionController as Section;
use App\Http\Controllers\Api\LevelController as Level;
use App\Http\Controllers\Api\TurnController as Turn;


//Indicar que este sera el primer API
Route::resource('V1/students', Classroom::class)->only('index','show','destroy');
Route::resource('student', Student::class)->only('index');
Route::resource('degree', Degree::class)->only('index');
Route::resource('section', Section::class)->only('index');
Route::resource('level', Level::class)->only('index');
Route::resource('turn', Turn::class)->only('index');