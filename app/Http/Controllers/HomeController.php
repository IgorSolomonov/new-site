<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function index()
    {
        // Дополнительные данные для передачи
        // $name = 'name';
        // $home_data = Home::all();
        // return view('home', compact('home_data', 'name'));
        return view('home');
    }

}
