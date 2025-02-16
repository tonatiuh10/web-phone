<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'logged'])->name('logged');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth.ensure'])->group(function () {
    Route::get('/', function () {return view('welcome');});    
    Route::get('/inicio', function () {return view('inicio');})->name('inicio');
    Route::get('/ventas', function () {return view('ventas');})->name('ventas');
    Route::get('/servicios', function () {return view('servicios');})->name('servicios');
    Route::get('/inventario', function () {return view('inventario');})->name('inventario');
    Route::get('/clientes', function () {return view('clientes');})->name('clientes');
    Route::resource('usuarios', UserController::class);
});
#Route::get('/usuarios', function () {return view('usuarios');})->name('usuarios');

