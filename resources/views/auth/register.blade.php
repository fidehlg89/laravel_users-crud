@extends('layouts.app')

@section('title', 'Registro')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    
    <h1 class="text-3x1 text-center font-bold">Registro</h1>

    <form class="mt-4" action="" method="POST">
        @csrf
        <input type="text" id="name" name="name"  placeholder="Nombre" class="border bg-gray-200 rounded-md w-full text-lg p-2 my-2"/>
        @error('name')
            <p class="border border-red-500 rounded-md bg-red-300 w-full text-red-600 p-2 my-2">* {{ $message }}</p>    
        @enderror 
        <input type="email" id="email" name="email"  placeholder="Email" class="border bg-gray-200 rounded-md w-full text-lg p-2 my-2"/>
        @error('email')
            <p class="border border-red-500 rounded-md bg-red-300 w-full text-red-600 p-2 my-2">* {{ $message }}</p>    
        @enderror 
        <input type="password" id="password" name="password" placeholder="Password" class="border bg-gray-200 rounded-md w-full text-lg p-2 my-2"/>
        @error('password')
            <p class="border border-red-500 rounded-md bg-red-300 w-full text-red-600 p-2 my-2">* {{ $message }}</p>    
        @enderror 
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirme su Password" class="border bg-gray-200 rounded-md w-full text-lg p-2 my-2"/>
        <button type="submit" class="bg-red-800 rounded-md py-2 my-3 w-full text-lg text-white">Enviar</button>
    </form>

</div>
    
@endsection