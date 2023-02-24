@extends('index')

@section('content-home')

    <div class="container-image">
        <img src="{{asset('images/compras.jpg')}}" alt="">
        <h1>BIENVENIDOS</h1>

        <div class="button-borders">
            <button class="primary-button"><a href="{{ route('create') }}">AGREGAR TIENDA</a></button>
          </div>
    </div>

@endsection
