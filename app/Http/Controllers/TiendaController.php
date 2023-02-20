<?php

namespace App\Http\Controllers;

use App\Models\Tienda;
use Illuminate\Http\Request;

class TiendaController extends Controller
{

    public function index(){
        $tienda = Tienda::all();
        return view('store-product.store', ['tienda' => $tienda]);
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|min:3',
            'fecha' => 'required'
        ]);

        $tienda = new Tienda;
        $tienda->nombre = $request->nombre;
        $tienda->fecha = $request->fecha;
        $tienda->save();

        return redirect()->route('create')->with('success','Tienda creada correctamente');
    }
}
