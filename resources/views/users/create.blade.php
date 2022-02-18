@extends('layouts.app')

@section('title', 'Nuevo Usuario')

@section('content')

    <div class="flex justify-between md:col-span-2 items-center px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Nuevo usuario</h3>
        <a href="javascript:history.back()"
            class="text-lg font-medium leading-6 text-indigo-600 hover:text-indigo-900">Atras</a>
        {{-- <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p> --}}
    </div>
    <div class="min-h-full flex items-center justify-center py-4 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-4">
            <form action="{{ route('usuarios.store') }}" method="POST">
                @csrf
                <div class="rounded-md shadow-sm space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nombre de Usuario</label>
                        <input id="name" name="name" type="text" autocomplete="name" required
                            class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>
                    @error('name')
                        <p
                            class="appearance-none relative block border border-red-500 rounded-md bg-red-300 w-full text-red-600 px-3 py-2 sm:text-sm">
                            * {{ $message }}
                        </p>
                    @enderror

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Correo</label>
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>
                    @error('email')
                        <p
                            class="appearance-none relative block border border-red-500 rounded-md bg-red-300 w-full text-red-600 px-3 py-2 sm:text-sm">
                            *
                            {{ $message }}</p>
                    @enderror

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">

                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Confirme su Contraseña</label>
                        <input id="password_confirmation" name="password_confirmation" type="password"
                            autocomplete="password_confirmation" required
                            class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>
                    @error('password')
                        <p
                            class="appearance-none relative block border border-red-500 rounded-md bg-red-300 w-full text-red-600 px-3 py-2 sm:text-sm">
                            *
                            {{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-6">
                    <button type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Registrar
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
