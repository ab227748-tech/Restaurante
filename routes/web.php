<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\pedidocontroller;
use App\Http\Controllers\authcontroller;

//Ruta Vistas Generales
Route::get('/', [homecontroller::class, 'index'])->name('home');
Route::get('/pedidos', [pedidocontroller::class, 'index'])->name('pedidos');
Route::get('/login', [authcontroller::class, 'index'])->name('login');