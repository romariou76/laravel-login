<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;


class ArticulosController extends Controller
{
    //}

    public function index(){
        $articulos = Articulo::all();
        // $articulos = Articulo::paginate();
        return view('home.index', compact('articulos'));
        // return $articulos;
    }

    public function store(Request $request){
        // return $request->all();
        $articulo = new Articulo();
        
        $articulo->user_id = $request->user_id;
        $articulo->title = $request->title;
        $articulo->description = $request->description;
        $articulo->price = $request->price;
        
        $articulo->save();
        return redirect()->back()->with('success', 'your message,here');
        // return view('articulos.store');
        // return redirect()->route('articuloos.show', $articulo);
    }

    // public function show($id){
    //     $articulo = Articulo::find($id);
    //     return view('articulos.show', compact('articulo'));
    // }
}
