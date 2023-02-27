@extends('index')

@section('content-product')
<div class="prod">

            @foreach ($producto as $productos)
            <div class="list-prod">

                <img src="/images/image/{{$productos->image}}" alt="" width="150">

                <h2>Producto: <h3>{{$productos->nombre}}</h3></h2>
                <h2>Descripcion: <h3>{{$productos->descripcion}}</h3></h2>
                <h2>Valor: {{$productos->valor}}</h2>

                <div class="button">
                    <form action="{{route('edit',$productos->id)}}" method="GET"><button class="button-one">Editar
                      </button></form>

                    <form action="{{route('destroy',$productos->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                    <button class="button-two noselect" onclick="return confirm('¿Estás seguro que deseas eliminar {{$productos->nombre}}?') " class="btn"><span class="text">Eliminar</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path></svg></span></button>
                </form>
                </div>
            </div>
        @endforeach

    </div>

@endsection
