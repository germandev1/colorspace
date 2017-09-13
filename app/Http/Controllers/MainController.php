<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function inicio(){
        return view('inicio.front-page');
    }

    public function team(){
        return view('inicio.equipo');
    }

    public function countdown(){
        return view('inicio.count');
    }
}
