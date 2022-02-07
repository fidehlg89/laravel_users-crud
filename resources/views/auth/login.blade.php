@extends('layouts.app')

@section('title', 'Acceso')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    
    <h1 class="text-2xl text-center font-bold">Login</h1>

    <form class="mt-4" action="" method="POST">
        @csrf
        <input type="email" id="email" name="email" placeholder="Email" class="border bg-gray-200 rounded-md w-full text-lg p-2 my-2"/>
        <input type="password" id="password" name="password" placeholder="Password" class="border bg-gray-200 rounded-md w-full text-lg p-2 my-2"/>
        @error('message')
            <p class="border border-red-500 rounded-md bg-red-300 w-full text-red-600 p-2 my-2">* Error</p>    
        @enderror
        
        <button type="submit" class="bg-red-800 rounded-md py-2 my-3 w-full text-lg text-white">Enviar</button>
    </form>

</div>
    
@endsection