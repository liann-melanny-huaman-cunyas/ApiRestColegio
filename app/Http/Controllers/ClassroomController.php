<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

//importar models

use App\Models\Classroom;
use Illuminate\Http\Request;


class ClassroomController extends Controller
{
    public function index():View
    {

        return view('welcome', [
            'classrooms' => Classroom::with('students')->latest()->get(),
        ]);

    }

    public function show(){

    }
}
