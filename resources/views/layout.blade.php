<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        .nav {
            display: flex;
            background-color: white; /* Cambiado a blanco para que se vea el fondo de cada sección */
        }
        .nav > div {
            position: relative;
        }
        .nav a {
            color: white;
            padding: 10px;
            margin: 5px;
            text-decoration: none;
            background-color: darkblue;
            border-radius: 4px;
            display: block;
            width: 100px; /* Ajusta el ancho según sea necesario */
            text-align: center;
        }
        .nav a.active {
            background-color: red;
        }
        .nav .submenu {
            display: none;
            position: absolute;
            top: 40px; /* Ajusta esta posición según sea necesario */
            left: 0;
            background-color: darkblue;
            padding: 10px;
            border-radius: 4px;
            z-index: 1000;
        }
        .nav .submenu a {
            display: block;
            padding: 5px;
            margin: 2px 0;
            width: auto; /* Ajusta el ancho según sea necesario */
        }
        .nav > div:hover .submenu,
        .nav .submenu:hover {
            display: block;
        }
    </style>
</head>
<body>
    <nav class="nav">
        <div><a href="{{ route('inicio') }}" class="{{ setActive('inicio') }}">Inicio</a></div>
        <div><a href="{{ route('programas') }}" class="{{ setActive('programas') }}">Programas</a></div>
        <div>
            <a href="{{ route('talleres') }}" class="{{ setActive('talleres*') }}">Talleres</a>
            <div class="submenu">
                <a href="{{ route('danza') }}" class="{{ setActive('danza') }}">Danza</a>
                <a href="{{ route('baile') }}" class="{{ setActive('baile') }}">Baile</a>
                <a href="{{ route('oratoria') }}" class="{{ setActive('oratoria') }}">Oratoria</a>
                <a href="{{ route('liderazgo') }}" class="{{ setActive('liderazgo') }}">Liderazgo</a>
            </div>
        </div>
        <div><a href="{{ route('asesoramiento') }}" class="{{ setActive('asesoramiento') }}">Asesoramiento</a></div>
        <div><a href="{{ route('contacto') }}" class="{{ setActive('contacto') }}">Contacto</a></div>
    </nav>
    <div>
        @yield('content')
    </div>
</body>
</html>
