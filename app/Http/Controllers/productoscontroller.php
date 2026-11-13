<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use App\Models\producto;
use Illuminate\Http\Request;

class productoscontroller extends Controller
{
    public function index(){

        $productos = producto::with('categoria')->get();
        $categorias = categoria::all();

        return view('admin.productos.index',[
            'productos'=>$productos,
            'categorias'=>$categorias,
            ]);
    }
}
