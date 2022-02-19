@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-12 px-4 mt-5 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="text-3xl flex flex-col items-center font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                <span class="block">Registro de Usuarios</span>                
            </div>
            <div class="mt-8 flex justify-center lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="{{ route('usuarios.create') }}"
                        class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                        Agregar usuario </a>
                </div>
                <div class="ml-3 inline-flex rounded-md shadow">
                    <a href="{{ route('usuarios.index') }}"
                        class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
                        Listado de usuarios </a>
                </div>
            </div>
        </div>
    </div>

@endsection
