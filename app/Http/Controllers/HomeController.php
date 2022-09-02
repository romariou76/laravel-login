<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Creamos el metodo index 
    public function index(){
        return view('home.index');
    }
}
