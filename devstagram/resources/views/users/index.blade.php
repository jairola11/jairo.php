@extends('layouts.app')

@section('titulo')
    Perfil: {{$user->username}}
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('img/usuario.svg') }}" alt="imagen de usuario">
            </div >
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis magni non iure pariatur sunt voluptatibus quidem ex fugiat quod unde quas blanditiis, laborum inventore nulla velit veniam tempora accusamus. Officia!</p>
            <div class="md:w-8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center md:items-start py-10 md:py-10">

            </div>
        </div>
    </div>
@endsection
