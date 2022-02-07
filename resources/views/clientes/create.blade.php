@extends('layouts.app')

@section('title', 'Clients')

@section('content')
    <div class="block mx-auto my-4 p-6 bg-white w-3/4 border border-gray-200 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold">Nuevo Cliente</h1>
        <a href="javascript:history.back()">Atras</a>
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf
            <div class="grid xl:grid-cols-2 xl:gap-2">
                <input type="text" id="name" name="name" class="border bg-gray-200 rounded-md w-full text-lg p-2 my-2"
                    placeholder="Nombre de cliente" required>

                <input type="text" id="app" name="app" class="border bg-gray-200 rounded-md w-full text-lg p-2 my-2"
                    placeholder="Apellidos del cliente" required>
            </div>

            <div class="grid xl:grid-cols-2 xl:gap-2">

                <input type="text" id="ci" name="ci" class="border bg-gray-200 rounded-md w-full text-lg p-2 my-2"
                    placeholder="No. de Carnet de Identidad" required>

                <input type="text" id="phone" name="phone" class="border bg-gray-200 rounded-md w-full text-lg p-2 my-2"
                    placeholder="Telefono" required>                

            </div>

            <textarea id="address" name="address" class="border bg-gray-200 rounded-md w-full text-lg p-2 my-2" rows="3"
                    placeholder="Direccion del destinatario"></textarea>

            <button type="submit" class="bg-red-800 rounded-md py-2 my-3 w-full text-lg text-white">Submit</button>
        </form>
    </div>

@endsection
