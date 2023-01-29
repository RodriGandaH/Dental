<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Nuevo Pago') }}
        </h2>
    </x-slot>
    <div class="py-2">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <form action="" method="POST">
                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2">
                        <div class="md:col-span-4 sm:col-span-1">
                            <p><b>Costo Total</b> <br></p>
                            <p>{{$tratamiento->costo}}</p>
                        </div>
                        <div class="md:col-span-4 sm:col-span-1">


                            <p><b>Pagado</b> <br></p>
                            @if($pagos->count() != 0)
                            <p>{{$tratamiento->abono}}</p>
                            @endif
                        </div>
                        <div class="md:col-span-4 sm:col-span-1">

                            <p><b>Saldo pendiente</b> <br></p>
                            @if ($pagos->count() != 0)
                            <p>{{$tratamiento->saldo_pendiente}}</p>

                            @endif
                        </div>

                    </div>

                    <br>

                    @csrf
                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2">
                        <div class="md:col-span-4 sm:col-span-1">
                            <b>
                                Abono
                            </b>
                            <x-text-input id="abono" class="block mt-1 w-full" type="number" name="abono"
                                :value="old('abono')" />
                            @error('abono')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
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