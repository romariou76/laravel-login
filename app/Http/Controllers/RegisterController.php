<?php

namespace App\Http\Controllers;

// clase para manejar autenticacion
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
//Importamos el request RegisterRequest
use App\Http\Requests\RegisterRequest;
use App\Models\User; // Importamos la clase User

class RegisterController extends Controller
{
    // Creamos el metodo show para mostrar una vista
    public function show(){
        // if(Auth::check()){
        //     return redirect('/home');
        // }
        return view('auth.register');
    }

    // Creamos otra llamada register, usamos request para atrapar los datos del form
    // Usamos el request de registro
    // public function register(Request $request){
    public function register(RegisterRequest $request){
        $user = User::create($request->validated()); //luego de validar los datos al crear el objeto user le redirigimos al login
        return redirect('/login')->with('success', 'usuario creado correctamente');
    }

}
