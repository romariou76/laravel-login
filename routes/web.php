<?php

use Illuminate\Support\Facades\Route;

// Importamos los controladores
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ArticulosController;

/*--------------------------------------------------------------------------
 Web Routes
--------------------------------------------------------------------------*/

Route::get('/', function () {
    return view('auth.login');
});

// Register
Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);

// Login
Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);

// Home
Route::get('/home', [HomeController::class, 'index']);

// Logout
Route::get('/logout', [LogoutController::class, 'logout']);

// Ruta para el registro de articulos
Route::controller(ArticulosController::class)->group(function(){
    Route::post('/articulos', 'store')->name('articulos.store');
    // Route::get('/home', 'index')->name('home.index');
    Route::get('/home', 'index')->name('home.vendedor');
});

Route::resource('articulos', ArticulosController::class);