<?php

use Illuminate\Support\Facades\Route;

// Importamos los controladores
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;

/*--------------------------------------------------------------------------
 Web Routes
--------------------------------------------------------------------------*/

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/register', function () {
//     return view('auth.register');
// });

// Register
Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);

// Login
Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);

// Home
Route::get('/home', [HomeController::class, 'index']);

// Route::group(['middleware' => ['auth']], function () { 
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/logout', [LogoutController::class, 'logout']);
// });

