@extends('layouts.app')

@section('titulo')
Regístrate aquí 
@endsection

@section('contenido')
    <div class="flex justify-center items-center">
        <div class="w-7/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('users.almacenar') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-600 font-semibold">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="border p-3 w-full rounded-md focus:outline-none focus:border-blue-500 @error('nombre') border-red-500 @enderror" value="{{ old('nombre') }}">
                    @error('nombre')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="cedula" class="block text-gray-600 font-semibold">Cedula</label>
                    <input type="text" id="cedula" name="cedula" placeholder="Cedula" class="border p-3 w-full rounded-md focus:outline-none focus:border-blue-500" value="{{ old('cedula') }}">
                    @error('cedula')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="telefono" class="block text-gray-600 font-semibold">Telefono</label>
                    <input type="text" id="telefono" name="telefono" placeholder="Telefono" class="border p-3 w-full rounded-md focus:outline-none focus:border-blue-500" value="{{ old('telefono') }}">
                    @error('telefono')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="direccion" class="block text-gray-600 font-semibold">Direccion</label>
                    <input type="text" id="direccion" name="direccion" placeholder="Direccion" class="border p-3 w-full rounded-md focus:outline-none focus:border-blue-500" value="{{ old('direccion') }}">
                    @error('direccion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <input type="submit" value="Crear cuenta" class="bg-purple-600 hover:bg-purple-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-md">
            </form>
        </div>
    </div>
@endsection
