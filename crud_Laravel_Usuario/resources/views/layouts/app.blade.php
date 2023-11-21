<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert2@7.3.0/dist/sweetalert2.all.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <style>
        /* Estilos para los botones del navbar */
        .navbar-link {
            color: #333;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 4px;
        }
        .navbar-link:hover {
            background-color: #f0f0f0;
        }
        /* Estilos para el encabezado y el pie de página */
        header, footer {
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
   
</head>
<body class="bg-gray-100">
    <header class="p-5 flex justify-between items-center">
        <h1 class="text-3xl font-black">
             Crud Laravel
        </h1>
        <nav class="flex gap-4 items-center">
            <a class="navbar-link" href="{{route('users.crear')}}">
                Crear Usuario
            </a>
            <a class="navbar-link" href="{{route('users.index')}}">
                Inicio
            </a>
        </nav>
    </header>

    <main class="container mx-auto mt-10">
        <h1 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h1>
        @yield('contenido')
    </main>

    <footer class="text-center p-5 text-gray-500 font-bold uppercase">
        CrudLaravel - Todos los derechos reservados {{ now() }}
    </footer>
</body>
</html>
