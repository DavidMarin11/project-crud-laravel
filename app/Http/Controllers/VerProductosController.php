<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Tienda;
use Illuminate\Http\Request;

class VerProductosController extends Controller
{
    public function todos(Request $request,$id){

        $tienda = Tienda::find($id);

        $productos = $tienda->productos;

        return view('ver-productos.verProductos',['productos'=>$productos]);
    }
}
