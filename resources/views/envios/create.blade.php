@extends('layouts.app')

@section('title', 'Nuevo Envio')

@section('content')

    <div class="grid">
        <div class="flex justify-between md:col-span-2 items-center px-4 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Nuevo Envio</h3>
            <a href="javascript:history.back()"
                class="text-lg font-medium leading-6 text-indigo-600 hover:text-indigo-900">Atras</a>
            {{-- <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p> --}}
        </div>

        <form action="{{ route('envios.store') }}" method="POST">
            @csrf
            @include('envios._form', compact('types'))
        </form>

    </div>

@endsection
