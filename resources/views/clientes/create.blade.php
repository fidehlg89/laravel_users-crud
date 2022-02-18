@extends('layouts.app')

@section('title', 'Nuevo Cliente')

@section('content')

    <div class="grid">
        <div class="flex justify-between md:col-span-2 items-center px-4 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Nuevo Cliente</h3>
            <a href="javascript:history.back()"
                class="text-lg font-medium leading-6 text-indigo-600 hover:text-indigo-900">Atras</a>
            {{-- <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p> --}}
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ route('clientes.store') }}" method="POST">
                @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Nombre del
                                    Cliente</label>
                                <input type="text" id="name" name="name" autocomplete="given-name" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium text-gray-700">Apellidos del
                                    Cliente</label>
                                <input type="text" name="app" id="app" autocomplete="family-name" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="ci" class="block text-sm font-medium text-gray-700">No. Carnet de
                                    Identidad</label>
                                <input type="text" name="ci" id="ci" autocomplete="ci" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium text-gray-700">Telefono</label>
                                <input type="text" name="phone" id="phone" autocomplete="phone" required
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                            </div>

                            <div class="col-span-6">
                                <label for="street-address"
                                    class="block text-sm font-medium text-gray-700">Direccion</label>
                                <input type="text" name="address" id="address" autocomplete="address"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                            </div>

                            <div class="col-span-6">
                                @livewire('statecity')
                            </div>                            

                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-left sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Guardar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
