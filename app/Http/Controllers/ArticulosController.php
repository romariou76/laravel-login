<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ArticulosController extends Controller
{
    
    public function store(Request $request){
        // dd($request->all());

        if($request->hasFile('img_path')){
            $articulos['img_path']=$request->file('img_path')->store('uploads','public');
        }

        Articulo::create([
            'user_id'     => $request->user()->id,
            'title'       => $request->title,
            'description' => $request->description,
            'price'       => $request->price,
            'img_path'    => $request->img_path,
        ]);

        return redirect()->back()->with('success', 'your message,here');
    }

    public function index(Request $request){

        // $user = Auth::user();
        $user = $request->user();
        // dd($user);
        
        $articulos = [];

        if($user->role_id == 2){

            $articulos = Articulo::where('user_id' , $user->id )->paginate(5);
        
        }
        else{

            $title = $request->title;
            // $user_id = $request->user_id;
            
            // $articulos = Articulo::all();
            $articulos = Articulo::orderBy('id')->searchTitle($title)->paginate(5);
            // $articulos = Articulo::orderBy('id')->searchUser($user_id)->paginate();

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

    // Metodo para Realizar Busqueda filtrando titulo o escritor

    public function scopeSearchTitle($query, $value){
        if($value){
            return $query->where('title', 'ilike', "%{$value}%");
            //return $query->where('title', 'ilike', "%".$value."%")
        }
    }

}