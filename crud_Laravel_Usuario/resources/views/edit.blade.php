@extends('layouts.app')

@section('titulo')
    Edita tu cuenta aqui 
@endsection

@section('contenido')
    <div class="flex justify-center items-center">
        <div class="w-8/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('users.actualizar', $usuario->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-5">
                    <label for="nombre" class="block uppercase text-gray-500 font-bold">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="border p-3 w-full rounded-lg @error('nombre') border-red-500 @enderror" value="{{ $usuario->nombre }}">
                    @error('nombre')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="cedula" class="block uppercase text-gray-500 font-bold">Cedula</label>
                    <input type="text" id="cedula" name="cedula" placeholder="Cedula" class="border p-3 w-full rounded-lg" value="{{ $usuario->cedula }}">
                    @error('cedula')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="telefono" class="block uppercase text-gray-500 font-bold">Telefono</label>
                    <input type="text" id="telefono" name="telefono" placeholder="Telefono" class="border p-3 w-full rounded-lg" value="{{ $usuario->telefono }}">
                    @error('telefono')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="direccion" class="block uppercase text-gray-500 font-bold">Dirección</label>
                    <input type="text" id="direccion" name="direccion" placeholder="Dirección" class="border p-3 w-full rounded-lg" value="{{ $usuario->direccion }}">
                    @error('direccion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <input type="submit" value="Actualizar esta cuenta " class="bg-purple-600 hover:bg-purple-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-md">
            </form>
        </div>
    </div>
@endsection
