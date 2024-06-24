<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController; // Cambiar 'UsuarioControler' a 'UsuarioController'

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/offline', function () {    
    return view('vendor/laravelpwa/offline');
});

/*
Route::get('/usuario', function () {
    return view('usuario.index');
});

Route::get('/usuario/create',[UsuarioController::class,'create']); */

/* CON ESTO SE VAN A ACCEDER A TODAS LAS RUTAS DE MI CONTROLADOR*/

Route::resource('usuario',UsuarioController::class);

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create', [UsuarioController::class, 'create'])->name('usuario.create');

Route::resource('usuarios', App\Http\Controllers\UsuarioController::class)->middleware('auth');

Route::get('/peach', function () {
    return view('Personajes.Index');
});

Route::get('/waluigi2', function () {
    return view('waluigi.Waluigi');
});

Route::get('/bowser2', function () {
    return view('bowser.Bowser');
});

Route::get('/link2', function () {
    return view('link.link');
});
