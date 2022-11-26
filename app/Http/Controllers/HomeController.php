<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        // return "Proyecto de etiquetas";
        return view('home');
    }
}
