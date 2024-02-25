<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Home;


class TeacherController extends Controller
{
    public function index()
    {
        // Дополнительные данные для передачи
        // $name = 'name';
        //$person_data = Home::all();
        // return view('home', compact('home_data', 'name'));
        // return view('teacher', compact(''));
        return view('teacher');
    }
}
