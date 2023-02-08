<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight text-center">
            {{ __('Pagos') }}
        </h2>
    </x-slot>
    <div class="py-2">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="text-xl text-gray-900 font-semibold">Nuevo pago</h2>
                <br>
                <form id="pago" method="POST">
                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2">
                        <div class="md:col-span-4 sm:col-span-1">
                            <span class=" text-gray-900 font-semibold">Costo Total</span> <br>
                            <span class=" text-gray-900">{{$tratamiento->costo}} Bs.</span>
                        </div>
                        <div class="md:col-span-4 sm:col-span-1">


                            <span class=" text-gray-900 font-semibold">Pagado</span> <br>

                            <span class=" text-gray-900">{{number_format($cantidad_pagada,2)}} Bs.</span>

                        </div>
                        <div class="md:col-span-4 sm:col-span-1">

                            <span class=" text-gray-900 font-semibold">Saldo pendiente</span> <br>
                            <span class=" text-gray-900">{{number_format($saldo_pendiente,2)}} Bs.</span>


                        </div>

                    </div>

                    <br>

                    @csrf
                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2">
                        <div class="md:col-span-4 sm:col-span-1">
                            <span class=" text-gray-900 font-semibold">
                                Abono
                            </span>
                            <x-text-input id="abono" class="block mt-1 w-full" type="text" name="abono"
                                :value="old('abono')" />
                            @error('abono')
                            <span class=" text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="flex justify-between">
                        <x-primary-button class="mt-3 ml-3">
                            {{ __('Guardar') }}
                        </x-primary-button>
                        <a class='inline-flex items-center px-4 mt-3 py-2 bg-red-600 border
                                                        border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-red-400
                                                        focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
                                                        duration-150 mr-3' type=" button"
                            href="{{ route('tratamiento.show', ['patient' => $patient->id, 'tratamiento' => $tratamiento->id]) }}"
                            style="
                                                    height: 34px;">
                            Cancelar</a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</x-app-layout>
<script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>

<script>
    const monto_abono = document.querySelector('#abono');

    document.querySelector('#pago').addEventListener('submit', function(event) {
        if (monto_abono.value > {{$saldo_pendiente}}) {
            event.preventDefault();
            console.log(monto_abono.value);
        // alert('El monto del abono no puede ser mayor al saldo pendiente');
         Swal.fire ({
            title: 'Error',
            text: 'El monto del abono no puede ser mayor al saldo pendiente',
            icon: 'error',
            confirmButtonText: 'Aceptar'
        }) }
        if(monto_abono.value<0){
            event.preventDefault();
            Swal.fire ({
            title: 'Error',
            text: 'El monto del abono no puede ser menor a 0 Bs.',
            icon: 'error',
            confirmButtonText: 'Aceptar'
        })
         }
    });
    //recorrer el input y cambiar la coma por punto
    monto_abono.addEventListener('input', function() {
        monto_abono.value = monto_abono.value.replace(',', '.');

    });

</script>