@extends('index')

@section('content-create-product')
    <div class="store">
        <h1>Crear Producto</h1>
    </div>

    <div class="login-box login">
        <form action="{{route('create-product')}}" method="POST">
            @csrf
        <div class="user-box">
            <input required="nombre" name="nombre" type="text">
            <label>Nombre del producto</label>
        </div>
        <div class="user-box">
            <input required="descripcion" name="descripcion" type="text">
            <label>Descripcion</label>
        </div>
        <div class="user-box">
            <input required="valor" name="valor" type="number">
            <label>Valor</label>
        </div>
        <div class="user-box">
            <input required="imagen" name="image" type="file">
        </div>
        <div class="user-box">
            <select name="tienda_id" id="">
                @foreach ($tienda as $tiendas)
                    <option value="{{$tiendas->id}}">{{$tiendas->nombre}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit"> AGREGAR <span></span></button>
        </form>

    </div>
@endsection
