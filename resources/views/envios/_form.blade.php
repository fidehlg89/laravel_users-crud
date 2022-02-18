<div class="mt-5 md:mt-0 md:col-span-2">
    <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="shipper" class="block text-sm font-medium text-gray-700">
                        Nombre y Apellidos del Embarcador
                    </label>
                    <input type="text" id="shipper" name="shipper" autocomplete="shipper" required
                        value="{{ Route::is('envios.edit') ? $shipment->shipper : '' }}"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="city" class="block text-sm font-medium text-gray-700">Nombre y apellidos del
                        Destinatario</label>
                    <select name="client" id="client"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="">Seleccione el Destinatario</option>
                        @foreach ($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="col-span-6 sm:col-span-1">
                    <label for="packages" class="block text-sm font-medium text-gray-700">No. de Bultos</label>
                    <input type="number" name="packages" id="packages" autocomplete="packages" required
                        value="{{ Route::is('envios.edit') ? $shipment->packages : '' }}"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>

                <div class="col-span-6 sm:col-span-1">
                    <label for="bl" class="block text-sm font-medium text-gray-700">BL</label>
                    <input type="text" name="bl" id="bl" autocomplete="bl" required
                        value="{{ Route::is('envios.edit') ? $shipment->bl : '' }}"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>

                <div class="col-span-6 sm:col-span-1">
                    <label for="weight" class="block text-sm font-medium text-gray-700">Peso (Kg)</label>
                    <input type="number" name="weight" id="weight" autocomplete="weight" required
                        value="{{ Route::is('envios.edit') ? $shipment->weight : '' }}"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="description" class="block text-sm font-medium text-gray-700"> Descripción </label>
                    <div class="mt-1">
                        <textarea id="description" name="description" rows="3"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full 
                        sm:text-sm border border-gray-300 rounded-md">
                        {{ Route::is('envios.edit') ? $shipment->description : '' }}
                    </textarea>
                    </div>
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <label for="receipt" class="block text-sm font-medium text-gray-700">
                        Recibo de Carga</label>
                    <input type="text" name="receipt" id="receipt" autocomplete="receipt" required
                        value="{{ Route::is('envios.edit') ? $shipment->receipt : '' }}"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>

                <div class="col-span-6 sm:col-span-1">
                    <label for="city" class="block text-sm font-medium text-gray-700">Categoria / Operacion</label>
                    <select name="type" id="type"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        {{-- Route::is('envios.edit' && --}}
                        @foreach ($types as $type)
                            @if (Route::is('envios.edit') && $type === $shipment->type)
                                <option selected="true">
                                    {{ $type }}
                                </option>
                            @else
                                <option>{{ $type }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>



            </div>
        </div>
        <div class="px-4 py-3 bg-gray-50 text-left sm:px-6">
            <button type="submit"
                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Guardar
            </button>
        </div>
    </div>
</div>

<script>
    $('textarea#description').html($('textarea#description').html().trim());
</script>
