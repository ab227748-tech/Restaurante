<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use App\Models\categoria;

class pedidocontroller extends Controller
{
    public function index()
    {
        $productos = producto::with('categoria')->get();
        $categorias = categoria::all();
        return view('pedidos.index', [
            'productos' => $productos, 
            'categorias' => $categorias,
            ]);
    }
}
