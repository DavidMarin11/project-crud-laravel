@extends('index')

@section('content-create')

    <div class="store">
        <h1>Crear Tienda</h1>
    </div>

    <div class="login-box">
        <form action="{{route('create')}}" method="POST">
            @csrf
        <div class="user-box">
            <input required="nombre" name="nombre" type="text">
            <label>Nombre de la tienda</label>
        </div>
        <div class="user-box">
            <input required="fecha" name="fecha" type="date">
        </div>

        <button type="submit"> AGREGAR <span></span></button>

        </form>
    </div>
    @if (session('success'))
        <h3 class="alerta">{{session('success')}}</h3>
    @endif
@endsection
