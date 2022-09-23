<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    //
    public function store(Request $request){
        return $request->all();
        // $articulo = new Articulo();
    }
}
