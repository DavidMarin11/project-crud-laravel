<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        @yield('css')
        <title>Tienda Virtual</title>

    </head>
    <body>

    <div class="container">
        <header class="header">
            <div class="logo">
                <h3><a href="{{ route('home') }}">TIENDA VIRTUAL</a></h3>
              </div>

        <div class="menu">
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">INICIO</a></li>
                <li><a href="{{ route('store') }}">TIENDAS</a></li>
                <li><a href="{{ route('product') }}">PRODUCTOS</a></li>
            </ul>
          </nav>
        </div>
        </header>

        @yield('content-home')

        @yield('content-create')

        @yield('content-create-product')

        @yield('content-product')

        @yield('content-store')

        @yield('content-edit')

        @yield('content-editStore')

        @yield('ver')

    </div>
    </body>
</html>
