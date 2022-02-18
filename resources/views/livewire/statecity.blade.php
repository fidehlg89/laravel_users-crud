<div class="grid grid-cols-6 gap-6">
    <div class="col-span-6 sm:col-span-3">
        <label for="state" class="block text-sm font-medium text-gray-700">Provincia</label>
        <select wire:model="selectedState" name="states" id="states"
            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="">Seleccione una Provincia</option>
            @foreach ($states as $state)
                <option value="{{ $state->id }}">{{ $state->name }}</option>
            @endforeach
        </select>
    </div>


    <div class="col-span-6 sm:col-span-3">
        <label for="city" class="block text-sm font-medium text-gray-700">Municipio</label>
        <select wire:model="selectedCity" name="city" id="city" {{ is_null($selectedState) ? 'disabled' : '' }}
            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="">Seleccione el Municipio</option>
            @if (!is_null($selectedState))
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>

