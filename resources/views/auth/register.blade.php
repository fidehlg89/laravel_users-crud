@extends('layouts.app')

@section('title', 'Registro')

@section('content')

    <div class="min-h-full flex items-center justify-center py-4 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-4">
            <div>
                <h2 class="mt-4 text-center text-3xl font-extrabold text-gray-900">Formulario de Registro</h2>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="rounded-md shadow-sm space-y-4">
                    <div>
                        <input id="name" name="name" type="text" autocomplete="name" required
                            class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Nombre">
                    </div>
                    @error('name')
                        <p class="appearance-none relative block border border-red-500 rounded-md bg-red-300 w-full text-red-600 px-3 py-2 sm:text-sm">* {{ $message }}
                        </p>
                    @enderror
                    <div>
                        <input id="app" name="app" type="text" autocomplete="name" required
                            class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Apellidos">
                    </div>
                    <div>
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Correo">
                    </div>
                    @error('email')
                        <p class="appearance-none relative block border border-red-500 rounded-md bg-red-300 w-full text-red-600 px-3 py-2 sm:text-sm">*
                            {{ $message }}</p>
                    @enderror
                    <div>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Contraseña">
                    </div>
                    @error('password')
                        <p class="appearance-none relative block border border-red-500 rounded-md bg-red-300 w-full text-red-600 px-3 py-2 sm:text-sm">*
                            {{ $message }}</p>
                    @enderror
                    <div>
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="current-password" required
                            class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Confirme su Contraseña">
                    </div>
                </div>
                <div class="mt-4">
                    <button type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">                        
                        Registrar
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
