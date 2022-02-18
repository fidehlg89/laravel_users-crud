@extends('layouts.app')

@section('title', 'Listado de usuarios')

@section('content')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="grid">
        <div class="flex justify-between">
            <div class="flex items-center">
                <h3 class="text-lg font-medium leading-6 text-gray-900 mr-4">Listado de usuarios</h3>
                <a href="{{ route('usuarios.create') }}"
                    class="py-2 px-4 mr-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Nuevo
                    usuario</a>
            </div>

            <div class="px-4 sm:px-0">
                <form action="{{ route('usuarios.index') }}" method="GET">
                    <div class="flex">
                        {{-- Input search --}}
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-2 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">
                                    <svg width="24" height="24" fill="none" aria-hidden="true" class="mr-3 flex-none">
                                        <path d="m19 19-3.5-3.5" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <circle cx="11" cy="11" r="6" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></circle>
                                    </svg>
                                </span>
                            </div>
                            <input type="search" name="search-text" id="price" value="{{ $search_text }}"
                                placeholder="Buscar"
                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-9 pr-12 sm:text-sm border-gray-300 rounded-md">

                        </div>
                        {{-- End input search --}}
                        <input type="submit" value="Buscar"
                            class="group relative flex items-center py-2 px-4 mx-1 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" />

                    </div>
                </form>
                {{-- <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p> --}}
            </div>

        </div>

        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 space-y-4">

                {{-- Users List --}}
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                @foreach ($headers as $header)
                                    @if ($header === end($headers))
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ $header }}
                                        </th>
                                    @else
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ $header }}
                                        </th>
                                    @endif
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @if (count($users) <= 0)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td colspan="{{ count($headers) }}" class="px-6 py-4 whitespace-nowrap text-center">
                                        <div class="flex justify-center flex-col">
                                            <span>Sin coincidencias {{ $search_text ? 'para' : '' }}
                                                {{ $search_text }}</span>
                                            <a href="{{ route('usuarios.index') }}"
                                                class="text-indigo-600 hover:text-indigo-900">Recargar</a>
                                        </div>
                                    </td>
                                </tr>
                            @else
                                @foreach ($users as $user)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 text-sm ">
                                        <td class="px-6 whitespace-nowrap">
                                            {{ $user->name }}
                                        </td>
                                        <td class="px-6 whitespace-nowrap">
                                            {{ $user->email }}
                                        </td>
                                        <td>
                                            <div
                                                class="flex px-6 py-2 whitespace-nowrap text-sm justify-center font-medium">
                                                
                                                <a href="{{ route('usuarios.edit', $user->id) }}"
                                                    class="focus:outline-none text-white text-sm p-2 rounded-md bg-yellow-500 hover:bg-yellow-600 hover:shadow-lg mr-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </a>
                                                <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="focus:outline-none 
                                                        text-white text-sm p-2 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                {{-- End Users List --}}
            </div>
        </div>
        <div class="w-full">
            {{ $users->links() }}
        </div>
    </div>

@endsection
