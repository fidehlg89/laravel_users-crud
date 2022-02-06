{{-- <div>
    @if (session()->has('message'))
        {{ session('message') }}
    @endif

    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

        <h1 class="text-3x1 text-center font-bold">Register</h1>

        <form class="mt-4">
            <input type="text" id="name" name="name" wire:model='name' placeholder="Nombre"
                class="border bg-gray-200 rounded-md w-full text-lg p-2 my-2" />
            @error('name') <em> {{ $message }} </em> @enderror <br>

            <input type="email" id="email" name="email" wire:model='email' placeholder="Email"
                class="border bg-gray-200 rounded-md w-full text-lg p-2 my-2" />
            @error('email') <em> {{ $message }} </em> @enderror <br>

            <input type="password" id="password" name="password" wire:model='password' placeholder="Password"
                class="border bg-gray-200 rounded-md w-full text-lg p-2 my-2" />
            @error('password') <em> {{ $message }} </em> @enderror <br>

            <button wire.click.prevent='store()' class="bg-red-800 rounded-md py-2 my-3 w-full text-lg text-white">Enviar</button>
        </form>

    </div>
</div> --}}
