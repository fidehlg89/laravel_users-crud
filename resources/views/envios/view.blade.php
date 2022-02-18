<div class="fixed z-10 inset-0 invisible overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
    id="viewShipmentModal">

    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>

        <div
            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">

            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Información del envío</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ $shipment->id }}</p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-3 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Embarcador</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 capitalize">
                                {{ $shipment->shipper }}
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Paquetes</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 capitalize">
                                {{ $shipment->packages }}</dd>
                        </div>

                        <div class="bg-gray-50 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">BL</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 capitalize">
                                {{ $shipment->bl }}</dd>
                        </div>
                        <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Peso (Kg)</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 capitalize">
                                {{ $shipment->weight }}</dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Contenido del bulto</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 capitalize">
                                {{ $shipment->description }}</dd>
                        </div>
                        <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Categoria / Operacion</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 capitalize">
                                {{ $shipment->type }}</dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Recibo de carga</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 capitalize">
                                {{ $shipment->receipt }}</dd>
                        </div>
                        <div class="bg-white px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Cliente</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 capitalize">
                                <a href="#"
                                    class="font-medium leading-6 text-indigo-600 hover:text-indigo-900">
                                    {{ $shipment->client->name . ' ' . $shipment->client->app }}
                                </a>

                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Código de Barra</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 capitalize font-bold">
                                {{ 'MXP' . $shipment->client->city->city_code . $shipment->bl }}</dd>
                        </div>
                    </dl>
                </div>
            </div>

            <div class="bg-white px-2 py-3 sm:flex sm:flex-row">
                <a href="{{ route('clientes.create') }}"
                    class="w-full inline-flex justify-center rounded-md border border-transparent 
                    shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 
                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 
                    sm:w-auto sm:text-sm">Nuevo
                    Cliente</a>
                <a href="{{ route('clientes.edit', $shipment->id) }}"
                    class="w-full inline-flex justify-center rounded-md border border-transparent 
                    shadow-sm px-4 py-2 bg-yellow-600 text-base font-medium text-white hover:bg-yellow-700 
                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 sm:ml-3 
                    sm:w-auto sm:text-sm">
                    Editar
                </a>
                <button type="button"
                    class="closeShipmentView mt-3 w-full inline-flex justify-center rounded-md border 
                    border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 
                    hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 
                    sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Cancelar
                </button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.openShipmentView').on('click', function(e) {
            $('#viewShipmentModal').removeClass('invisible');
        });

        $('.closeShipmentView').on('click', function(e) {
            $('#viewShipmentModal').addClass('invisible');
        });
    });
</script>
