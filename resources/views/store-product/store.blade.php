@extends('index')

@section('content-store')
<div class="alert-editStore">
    @if (session('success'))
        <h3 class="alertas">{{session('success')}}</h3>
    @endif

</div>
<div class="list-store">
    @foreach ($tienda as $tiendas)
    <div class="element">
        <h1 class="log"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-store" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="3" y1="21" x2="21" y2="21" />
            <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
            <line x1="5" y1="21" x2="5" y2="10.85" />
            <line x1="19" y1="21" x2="19" y2="10.85" />
            <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
            </svg></h1>
        <h1>{{$tiendas->nombre}}</h1>
        <h3>Fecha de creacion</h3>
        <h3>{{$tiendas->fecha}}</h3>

        <div class="button-ver">
            <a href="{{route('ver',$tiendas->id)}}">Ver productos</a>
        </div>

        <div class="button">
            <a href="{{route('create-product')}}"><button class="button-one">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Agregar
                </span>
                </button>
            </a>

            <form action="{{route('edit-store',$tiendas->id)}}" method="GET"><button class="button-one">Editar
            </button>
            </form>
        </div>

        <form action="{{route('destroy-store',$tiendas->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="button-two noselect" onclick="return confirm('¿Estás seguro que deseas eliminar {{$tiendas->nombre}}?') " class="btn"><span class="text">Eliminar</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path></svg></span></button>
        </form>

    </div>
    @endforeach
</div>

@endsection
