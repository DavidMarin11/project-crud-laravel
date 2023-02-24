@extends('index')

@section('content-create')

    <div class="stors">
        <h1>Crear Tienda</h1>
    </div>

    <div class="alert-div">
        @if (session('success'))
            <h3 class="alerta">{{session('success')}} <a href="{{route('store')}}">Ir a tienda</a></h3>
        @endif
    </div>

    <div class="cont">
    <div class="login-create">
        <form action="{{route('create')}}" method="POST">
            @csrf
        <div class="user-create">
            <input required="nombre" name="nombre" type="text">
            <label>Nombre de la tienda</label>
        </div>
        <div class="user-create">
            <input required="fecha" name="fecha" type="date">
        </div>

        <button type="submit"> AGREGAR <span></span></button>

        </form>
    </div>
    </div>
@endsection
