<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                @include('layouts.mobilebutton')
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center text-white">
                    Logo
                    {{-- <img class="hidden lg:block h-8 w-auto"
                        src="https://www.martelexpresssa.com/wp-content/uploads/2019/08/LOGO-MARTELEXPRESS.png"
                        alt="Workflow"> --}}
                </div>
            </div>
            <div class="hidden sm:block sm:ml-6">
                <div class="flex space-x-4 items-center">
                    <a href="/" class="{{ Route::is('home') ? 'bg-gray-900 text-white':
                     'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium">Inicio</a>

                    @if(auth()->check())
                        <a href="/usuarios" class="{{ Route::is('usuarios.index') ? 'bg-gray-900 text-white':
                        'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium">Usuarios</a>
                        <a href="/clientes" class="{{ Route::is('clientes.index') ? 'bg-gray-900 text-white':
                        'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium">Clientes</a>
                        <a href="/envios" class="{{ Route::is('envios.index') ? 'bg-gray-900 text-white':
                        'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium">Envios</a>
                    @endif

                    
                    <ul class="flex">
                        @if (auth()->check())
                            <li>
                                <span
                                    class="text-gray-300 px-3 py-2 mr-2 rounded-md text-sm ">
                                    Bienvenido <b>{{ auth()->user()->name }}</b></span>
                            </li>
                            <li>
                                <a href="{{ route('login.destroy') }}"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Salir</a>
                            </li>
                        @else
                            <li>
                                <a href="/login" 
                                class="{{ Route::is('login.index') ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white ' }} px-3 py-2 rounded-md text-sm font-medium">Acceder</a>
                                
                            </li>
                            <li>
                                <a href="{{ route('register.index') }}" 
                                class="{{ Route::is('register.index') ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white ' }} px-3 py-2 ml-4 rounded-md text-sm font-medium">Registro</a>

                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>