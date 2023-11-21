@extends('layouts.app')

@section('titulo')
   esta pagina es de ver todos los Usuarios 
@endsection

@section('contenido')
<div class="container mx-auto mt-8">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold">Lista de todos  Usuarios</h2>
        <a href="{{route('export_user_pdf')}}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded inline-block"> Aqui puedes Exportar todos los Usuarios</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full bg-white border border-gray-300 rounded-t-lg rounded-b-lg">
            <thead>
                <tr>
                    <th class="py-2 px-3 border-b">N</th>
                    <th class="py-2 px-3 border-b">Nombre</th>
                    <th class="py-2 px-3 border-b">Cedula</th>
                    <th class="py-2 px-3 border-b">Teléfono</th>
                    <th class="py-2 px-3 border-b">Dirección</th>
                    <th class="py-2 px-3 border-b">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <td class="py-2 px-3 border-b">{{ $loop->index + 1 }}</td>
                    <td class="py-2 px-3 border-b">{{ $usuario->nombre }}</td>
                    <td class="py-2 px-3 border-b">{{ $usuario->cedula }}</td>
                    <td class="py-2 px-3 border-b">{{ $usuario->telefono }}</td>
                    <td class="py-2 px-3 border-b">{{ $usuario->direccion }}</td>
                    <td class="py-2 px-3 border-b flex flex-col items-center">
                        <a href="{{ route('users.editar',$usuario->id) }}" class="bg-blue-400 hover:bg-blue-500 text-white px-3 py-1 rounded mb-1 inline-block">Editar</a>
                        <form action="{{ route('users.destruir', $usuario->id) }}" method="POST" class="bg-rose-400 hover:bg-rose-500 text-white px-3 py-1 rounded">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
