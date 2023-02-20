<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Tienda;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){

        $producto = Producto::all();
        return view('store-product.product', ['producto' => $producto]);

    }

    public function create(){
        $tienda = Tienda::all();
        return view('create.createProduct',['tienda'=>$tienda]);
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required|min:3',
            'descripcion' => 'required|min:3',
            'valor' => 'required',
            'image' => 'required',
            'tienda_id' => 'required'
        ]);

        $producto = new Producto;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->valor = $request->valor;
        $producto->image = $request->image;
        $producto->tienda_id = $request->tienda_id;

        $producto->save();

        return redirect()->route('create-product')->with('success','Producto creada correctamente');
    }

    public function edit($id){

        $producto = Producto::find($id);
        return view('update.edit', compact('producto'));
    }

    public function update(Request $request, $id){

        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->valor = $request->valor;
        $producto->image = $request->image;
        $producto->tienda_id = $request->tienda_id;

        $producto->save();

        return redirect()->route('product')->with('success','Actualizado con exito');

    }

    public function destroy($id){

        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('product')->with('success','Eliminado con exito');
}
}
