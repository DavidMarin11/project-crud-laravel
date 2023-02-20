@extends('index')

@section('content-edit')
<div class="store">
    <h1>Actualizar</h1>
</div>

<div class="login-box login">
    <form action="{{ route('update', $producto->id)}}" method="POST">
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
    <div class="user-box">
        <input required="imagen" name="image" type="file" value="{{$producto->image}}">
    </div>
    <button type="submit"> AGREGAR <span></span></button>
    </form>

</div>
@endsection
