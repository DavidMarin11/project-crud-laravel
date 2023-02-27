@extends('index')

@section('content-edit')
<div class="store-edit">
    <h1>Actualizar Producto</h1>
</div>

<div class="aler">
    @if (session('success'))
        <h3 class="alerta-edit">{{session('success')}} <a href="{{route('product')}}">Ir a productos</a></h3>
    @endif
</div>

<div class="conten">
<div class="login-box login">
    <form action="{{ route('update', $producto->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
    <div class="user-box">
        <input required="nombre" name="nombre" type="text" value="{{$producto->nombre}}">
        <label>Nombre del producto</label>
    </div>
    <div class="user-box">
        <input required="descripcion" name="descripcion" type="text" value="{{$producto->descripcion}}">
        <label>Descripcion</label>
    </div>
    <div class="user-box">
        <input required="valor" name="valor" type="number" value="{{$producto->valor}}">
        <label>Valor</label>
    </div>
    <div>
        <img src="/images/image/{{$producto->image}}" alt="" width="150">
    </div>
    <div class="user-box">
        <input required="imagen" name="image" type="text" value="{{$producto->image}}" readonly>
    </div>

    <div class="user-box">
        <select name="tienda_id" id="">
            <option value="{{$producto->tienda_id}}">Tienda: {{$producto->tienda->nombre}}</option>
    </select>

    </div>
    <button type="submit"> Actualizar <span></span></button>
    </form>

</div>
</div>
@endsection
