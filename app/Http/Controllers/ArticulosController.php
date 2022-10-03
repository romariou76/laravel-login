<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ArticulosController extends Controller
{
    
    public function store(Request $request){
        // dd($request->all());

        Articulo::create([
            'user_id'     => $request->user()->id,
            'title'       => $request->title,
            'description' => $request->description,
            'price'       => $request->price,
        ]);

        return redirect()->back()->with('success', 'your message,here');
    }

    public function index(Request $request){

        // $user = Auth::user();
        $user = $request->user();
        // dd($user);
        
        $articulos = [];

        if($user->role_id == 2){

            $articulos = Articulo::where('user_id' , $user->id )->get();
        
        }
        else{

            $articulos = Articulo::all();
            return view('home.vendedor', compact('articulos'));
            // dd('Entre aqui');
        }

        return view('home.index', compact('articulos'));
        // return $articulos;
    }

    public function edit(Request $request, $id){

        $articulos = Articulo::findOrFail($id);

        $user = $request->user();

        if($user->role_id == 2){
            $articulos = Articulo::where('user_id' , $user->id )->get();
        }

        else{
            return view('layouts.form', compact('articulos'));
        }

        $articulos = Articulo::findOrFail($id);
            return view('layouts.edit', compact('articulos'));

    }

    public function update(Request $request, $id){
    
        $datosArticulo = request()->except(['_token','_method']);
        Articulo::where('id','=',$id)->update($datosArticulo);

        $user = $request->user();

        if($user->role_id == 2){
            $articulos = Articulo::where('user_id' , $user->id )->get();
        }

        else{
            $articulos = Articulo::findOrFail($id);
            return view('layouts.form', compact('articulos'));
        }

        $articulos = Articulo::findOrFail($id);
            return view('layouts.edit', compact('articulos'));

    }

    public function destroy($id)
    {
        Articulo::destroy($id);
        return redirect('articulos');
    }

}