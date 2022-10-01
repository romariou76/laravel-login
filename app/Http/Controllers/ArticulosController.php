<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ArticulosController extends Controller
{
    //}
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

    public function destroy($id)
    {
        Articulo::destroy($id);
        return redirect('articulos');
    }

}