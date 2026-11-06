<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class homecontroller extends Controller
{
    public function index()
    {
        $VistaPrincipal = Producto::where('activo', 1)->where('vistaprincipal', 'si')->get();

        return view('home', ['vistaprincipal' => $VistaPrincipal]);
    }
}
