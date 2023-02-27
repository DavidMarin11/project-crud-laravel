@extends('index')

@section('content-editStore')

    <div class="stors">
        <h1>Crear Tienda</h1>
    </div>

    <div class="cont">
    <div class="login-create">
        <form action="{{route('update-store',$tienda->id)}}" method="POST">
            @csrf
            @method("PUT")
        <div class="user-create">
            <input required="nombre" name="nombre" type="text" value="{{$tienda->nombre}}">
            <label>Nombre de la tienda</label>
        </div>
        <div class="user-create">
            <input required="fecha" name="fecha" type="date" value="{{$tienda->fecha}}">
        </div>

        <button type="submit"> ACTUALIZAR <span></span></button>

        </form>
    </div>
    </div>
@endsection
