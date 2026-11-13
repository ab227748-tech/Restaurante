<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\pedidocontroller;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\productoscontroller;

//Ruta Vistas Generales
Route::get('/', [homecontroller::class, 'index'])->name('home');
Route::get('/pedidos', [pedidocontroller::class, 'index'])->name('pedidos');

//Inicio Sesion
Route::get('/login', [authcontroller::class, 'index'])->name('login');
Route::post('/login/admin', [authcontroller::class, 'login']);

Route::group(['middlaware' => 'auth'], function () {

    //dashboard
    Route::get('/administrador/dashboard', [admincontroller::class, 'index']);

    //productos
    Route::get('/administrador/productos',[productoscontroller::class, 'index']);
});