@extends('layouts.app')

@section('title', 'Clients')

@section('content')

    <?php $headers = ['Client', 'No. de Carnet de Identidad', 'Telefono', 'Direccion', 'Acciones']; ?>
    <div class="flex flex-col">
        <div class="overflow-x-auto shadow-md sm:rounded-lg">
            <div class="min-w-full align-middle">
                <div class="block mx-auto">
                    <form action="{{ route('clientes.index') }}" method="GET">
                        <input type="search" name="search-text" id="search-text" value="{{ $search_text }}"
                            placeholder="Buscar" class="border bg-gray-200 rounded-md text-lg p-2 my-2" />

                        <input type="submit" value="Buscar"
                            class="border bg-red-800 rounded-md text-lg p-2 my-2 text-white cursor-pointer hover:bg-red-700" />

                        <a href="{{ route('clientes.create') }}"
                            class="border bg-red-800 rounded-md text-lg p-2 my-2 text-white cursor-pointer hover:bg-red-700">Nuevo</a>

                    </form>
                </div>
                <div class="overflow-hidden ">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                            <tr>
                                @foreach ($headers as $header)
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        {{ $header }}
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                            @if (count($clients) <= 0)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td colspan="{{ count($headers) }}"
                                        class="py-4 px-6text-sm font-medium text-gray-900 whitespace-nowrap text-center dark:text-white">
                                        No existen coincidencias {{ $search_text }}</td>
                                </tr>
                            @else
                                @foreach ($clients as $client)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <td
                                            class="py-4 px-6text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $client->name . ' ' . $client->app }}</td>
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            {{ $client->ci }}</td>
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                            {{ $client->phone }}</td>
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $client->address }}</td>
                                        <td class="py-4 px-6 text-sm font-medium whitespace-nowrap">
                                            <a href="{{ route('clientes.edit', $client->id) }}"
                                                class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                            <span>|</span>
                                            <form action="{{ route('clientes.destroy', $client->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="text-blue-600 dark:text-blue-500 hover:underline" value="Eliminar">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{ $clients->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </div>

@endsection
