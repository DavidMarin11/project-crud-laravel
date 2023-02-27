<?php

namespace App\Http\Controllers;

use App\Models\Producto;
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

    public function edit($id){

        $tienda = Tienda::find($id);
        return view('update.editStore', compact('tienda'));
    }

    public function update(Request $request, $id){

        $tienda = Tienda::find($id);

        $tienda->nombre = $request->nombre;
        $tienda->fecha = $request->fecha;
        $tienda->save();

        return redirect()->route('store')->with('success','Actualizado con exito');
    }

    public function destroy($tienda){

        $tienda = Tienda::find($tienda);
        $tienda -> productos()->each(function($producto){
            $producto->delete();
        });
        $tienda->delete();

        return redirect()->route('store')->with('success','Tienda eliminada');
    }
}
