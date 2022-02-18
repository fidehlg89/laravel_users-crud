@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')

    <div class="flex justify-between md:col-span-2 items-center px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Editar usuario</h3>
        <a href="javascript:history.back()"
            class="text-lg font-medium leading-6 text-indigo-600 hover:text-indigo-900">Atras</a>
        {{-- <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p> --}}
    </div>
    <div class="min-h-full flex items-center justify-center py-4 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-4">
            <form action="{{ route('usuarios.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="rounded-md shadow-sm space-y-4">
                    <input id="id" name="id" type="hidden" value="{{ $user->id }}">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nombre de Usuario</label>
                        <input id="name" name="name" type="text" autocomplete="name" required value="{{ $user->name }}"
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
                        <input id="email" name="email" type="email" autocomplete="email" value="{{ $user->email }}"
                            class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>
                    @error('email')
                        <p
                            class="appearance-none relative block border border-red-500 rounded-md bg-red-300 w-full text-red-600 px-3 py-2 sm:text-sm">
                            *
                            {{ $message }}</p>
                    @enderror

                    <div>
                        <label for="current_password" class="block text-sm font-medium text-gray-700">Contraseña anterior</label>
                        <input id="current_password" name="current_password" type="password" autocomplete="current-password"
                            class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">

                    </div>
                    @error('current_password')
                        <p 
                            class="appearance-none relative block border border-red-500 rounded-md bg-red-300 w-full text-red-600 px-3 py-2 sm:text-sm">
                            *
                            {{ $message }}</p>
                    @enderror
                    <div class="@error('current_password') is-invalid @enderror"></div>
                    @error('current_password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div>
                        <label for="new_password" class="block text-sm font-medium text-gray-700">Nueva contraseña</label>
                        <input id="new_password" name="new_password" type="password" autocomplete="new-password"
                            class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>
                    @error('new_password')
                        <p
                            class="appearance-none relative block border border-red-500 rounded-md bg-red-300 w-full text-red-600 px-3 py-2 sm:text-sm">
                            *
                            {{ $message }}</p>
                    @enderror

                    <div>
                        <label for="new_confirm_password" class="block text-sm font-medium text-gray-700">Confirme la nueva
                            contraseña</label>
                        <input id="new_confirm_password" name="new_confirm_password" type="password"
                            autocomplete="new_confirm_password"
                            class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>
                    @error('new_confirm_password')
                        <p
                            class="appearance-none relative block border border-red-500 rounded-md bg-red-300 w-full text-red-600 px-3 py-2 sm:text-sm">
                            *
                            {{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-6">
                    <button type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
