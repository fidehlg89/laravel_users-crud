
@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
       <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Acceso</a></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Login Form Here, Login Form Here, Login Form Here, Login Form Here,
                            Login Form Here, Login Form Here, Login Form Here, Login Form Here,
                            Login Form Here, Login Form Here, Login Form Here, Login Form Here,
                            Login Form Here, Login Form Here, Login Form Here, Login Form Here,
                            Login Form Here, Login Form Here, Login Form Here, Login Form Here,
                            Login Form Here, Login Form Here, Login Form Here, Login Form Here,
                            Login Form Here, Login Form Here, Login Form Here, Login Form Here,
                            Login Form Here, Login Form Here, Login Form Here, Login Form Here,
                            Login Form Here, Login Form Here, Login Form Here, Login Form Here,
                            Login Form Here, Login Form Here, Login Form Here, Login Form Here,
                            Login Form Here, Login Form Here, Login Form Here, Login Form Here 
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Registro</a></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                           Register Form Here, Register Form Here, Register Form Here, Register Form Here
                           Register Form Here, Register Form Here, Register Form Here, Register Form Here
                           Register Form Here, Register Form Here, Register Form Here, Register Form Here
                           Register Form Here, Register Form Here, Register Form Here, Register Form Here
                           Register Form Here, Register Form Here, Register Form Here, Register Form Here
                           Register Form Here, Register Form Here, Register Form Here, Register Form Here
                           Register Form Here, Register Form Here, Register Form Here, Register Form Here
                           Register Form Here, Register Form Here, Register Form Here, Register Form Here
                           Register Form Here, Register Form Here, Register Form Here, Register Form Here
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center">
                    {{-- <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                        <path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>

                    <a href="https://www.martelexpresssa.com/" class="ml-1 underline">
                        MartelExpress S.A
                    </a> --}}  
                    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                        <a href="https://www.martelexpresssa.com/" target="_blank">
                            <img src="https://www.martelexpresssa.com/wp-content/uploads/2019/08/LOGO-MARTELEXPRESS.png" alt="">
                        </a>
                    </div>                         
                </div>
            </div>

            {{-- <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div> --}}
        </div>
    </div>
</div>
    
@endsection
