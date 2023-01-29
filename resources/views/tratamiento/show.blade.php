<x-app-layout>

    <x-slot name="header">

        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ $patient->nombre }}
        </h2>

    </x-slot>

    <div class="py-3">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <br>
                {{-- <div class="grid md:grid-cols-2 sm:grid-cols-1  gap-4"> --}}

                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2">
                        <div class="md:col-span-3 sm:col-span-1">
                            <p><b>Dientes </b> <br> {{$tratamiento->diente}} </p>
                        </div>
                        <div class="md:col-span-3 sm:col-span-1">
                            <p><b>Diagnostico </b> <br> {{$tratamiento->diagnostico}} </p>
                        </div>
                        <div class="md:col-span-2 sm:col-span-1">
                            <p><b>Rayos X</b> <br>
                                @if ($tratamiento->rayos_x == 1)
                            <p>Si</p>
                            @else
                            <p>No</p>
                            @endif
                            </p>
                        </div>
                        <div class="md:col-span-1 sm:col-span-1">
                            <p><b>Tratamiento </b> <br>
                                {{ $tratamiento->tratamiento }}
                            </p>
                        </div>
                        <div class="md:col-span-2 sm:col-span-1">
                            <p><b>Costo </b> <br> {{$tratamiento->costo}} </p>
                        </div>
                        <div class="md:col-span-1 sm:col-span-1">
                            <p><b>Fecha de inicio </b> <br> {{$tratamiento->fecha_inicio}} </p>

                        </div>

                    </div>
                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                        <div class="md:col-span-3 sm:col-span-1">
                            <p><b>Fecha de finalizacion</b> <br></p>
                            @if ($tratamiento->fecha_fin == null)
                            <p>Aun no se finalizó</p>
                            @else
                            <p>{{$tratamiento->fecha_fin}}</p>
                            @endif
                        </div>
                        <div class="md:col-span-3 sm:col-span-1">
                            <p><b>Observaciones</b> <br></p>
                            @if ($tratamiento->observaciones != null)
                            <p>{{$tratamiento->observaciones}}</p>

                            @else
                            <p>No se tienen observaciones</p>
                            @endif
                        </div>
                        <div class="md:col-span-2 sm:col-span-1">
                            <p>
                                <b>Estado</b> <br>
                            </p>
                            @if ($tratamiento->estado == 0)
                            <p>En proceso</p>
                            @else
                            <p>Finalizado</p>
                            @endif

                        </div>


                    </div>

                    <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-800">



                    <div class="flex justify-start">

                        <a class="inline-flex items-center px-4 py-2 mb-3 bg-gray-800 border
                                        border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-600
                                        focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
                                        duration-150" type="button"
                            href="{{ route('pago.create', ['patient' => $patient->id, 'tratamiento' => $tratamiento->id]) }}">Nuevo
                            Pago</a>
                    </div>

                </div>
            </div>
        </div>
</x-app-layout>