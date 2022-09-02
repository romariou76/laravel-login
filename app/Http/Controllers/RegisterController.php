<?php

namespace App\Http\Controllers;

// clase para manejar autenticacion
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
//Importamos el request de registro
use App\Http\Requests\RegisterRequest;
use App\Models\User; // Importamos la clase User

class RegisterController extends Controller
{
    // ruta de vista
    public function show(){
        if(Auth::check()){
            return redirect('/home');
        }
        return view('auth.register');

    }
    // requests para atrapar los datos del formulario
    // Usamos el request de registro
    // public function register(Request $request){
    public function register(RegisterRequest $request){
        $user = User::create($request->validated()); //luego de validar los datos le redirigimos al login
        return redirect('/login')->with('success', 'usuario creado correctamente');
    }
}
