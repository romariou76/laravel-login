<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest; // importamos el request

// importamos esta clase para manejar autenticacion en laravel
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        if(Auth::check()){
            return redirect('/home');
        }
        return view('auth.login');
    }

    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){
            return redirect('/login')->withErrors('auth.failed');
        }
        
        // Si son validadas creamos el usuario
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        // Funcion para hacer el login/sesiones
        Auth::login($user);

        // Retornamos un obj de que estamos autenticados
        return $this->authenticated($request, $user);
    }

    // Redirigimos al home con los 2 parametros
    public function authenticated(Request $request, $user){
        return redirect('/home'); 
    }
}
