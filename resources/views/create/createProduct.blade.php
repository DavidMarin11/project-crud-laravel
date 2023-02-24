@extends('index')

@section('content-create-product')
    <div class="product-cre">
        <h1>Crear Producto</h1>
    </div>

    <div class="alert">
        @if (session('success'))
            <h3 class="alerta-producto">{{session('success')}} <a href="{{route('product')}}">Ir a productos</a></h3>
        @endif
    </div>

    <div class="conte">
    <div class="login-bo">
        <form action="{{route('create-product')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="user-bo">
            <input required="nombre" name="nombre" type="text">
            <label>Nombre del producto</label>
        </div>
        <div class="user-bo">
            <input required="descripcion" name="descripcion" type="text">
            <label>Descripcion</label>
        </div>
        <div class="user-bo">
            <input required="valor" name="valor" type="number">
            <label>Valor</label>
        </div>
        <div class="user-bo">
            <input required="imagen" name="image" type="file">
        </div>
        <div class="user-bo">
            <p for="">Elegir tienda</p>
            <select class="select" required="tienda_id" name="tienda_id" id="">
                <option></option>
                @foreach ($tienda as $tiendas)
                    <option value="{{$tiendas->id}}">{{$tiendas->nombre}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit"> AGREGAR <span></span></button>
        </form>

    </div>
    </div>
@endsection
