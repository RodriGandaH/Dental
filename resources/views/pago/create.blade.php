<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight text-center">
            {{ __('Pagos') }}
        </h2>
    </x-slot>
    <div class="py-2">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="font-bold text-2xl">Nuevo pago</h2>
                <br>
                <form id="pago" method="POST">
                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2">
                        <div class="md:col-span-4 sm:col-span-1">
                            <p><b>Costo Total</b> <br></p>
                            <p>{{$tratamiento->costo}} Bs.</p>
                        </div>
                        <div class="md:col-span-4 sm:col-span-1">


                            <p><b>Pagado</b> <br></p>

                            <p>{{number_format($cantidad_pagada,2)}} Bs.</p>

                        </div>
                        <div class="md:col-span-4 sm:col-span-1">

                            <p><b>Saldo pendiente</b> <br></p>
                            <p>{{number_format($saldo_pendiente,2)}} Bs.</p>


                        </div>

                    </div>

                    <br>

                    @csrf
                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2">
                        <div class="md:col-span-4 sm:col-span-1">
                            <b>
                                Abono
                            </b>
                            <x-text-input id="abono" class="block mt-1 w-full" type="text" name="abono"
                                :value="old('abono')" />
                            @error('abono')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="flex justify-between">
                        <button type="submit"
                            class="mt-3 ml-3 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Guardar
                        </button>
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