<x-app-layout>

    <x-slot name="header">

        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ $patient->nombre }}
        </h2>

    </x-slot>

    <div class="py-3">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between">
                    @if($tratamiento->pagos->sum('abono') < $tratamiento->costo)

                        <a class="inline-flex items-center px-4 py-2 mb-3 bg-gray-800 border
                                                            border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-600
                                                            focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
                                                            duration-150" type="button"
                            href="{{ route('pago.create', ['patient' => $patient->id, 'tratamiento' => $tratamiento->id]) }}">Nuevo
                            Pago</a>
                        @else
                        @endif
                        <a class='inline-flex items-center px-4 py-2 bg-green-500 border
                                                                            border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-green-400
                                                                            focus:outline-none focus:ring-2 focus:ring-green-700 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
                                                                            duration-150 mr-3' type=" button"
                            href="{{ route('tratamiento.index',  $patient->id) }}" style="
                                                                        height: 34px;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                            </svg></a>
                </div>
                {{-- <div class="grid md:grid-cols-2 sm:grid-cols-1  gap-4"> --}}

                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2">
                        <div class="md:col-span-3 sm:col-span-1">
                            <span class="text-sm text-gray-900 font-semibold">Dientes</span> <br> <span
                                class="text-sm text-gray-900">{{$tratamiento->diente}}</span>
                        </div>
                        <div class="md:col-span-3 sm:col-span-1">
                            <span class="text-sm text-gray-900 font-semibold">Diagnostico </span> <br> <span
                                class="text-sm text-gray-900">{{$tratamiento->diagnostico}}</span>
                        </div>
                        <div class="md:col-span-1 sm:col-span-1">
                            <span class="text-sm text-gray-900 font-semibold">Rayos X</span> <br>
                            @if ($tratamiento->rayos_x == 1)
                            <span class="text-sm text-gray-900 ">Si</span>
                            @else
                            <span class="text-sm text-gray-900 ">No</span>
                            @endif

                        </div>
                        <div class="md:col-span-3 sm:col-span-1">
                            <span class="text-sm text-gray-900 font-semibold">Tratamiento </span> <br>

                            <span class="text-sm text-gray-900 ">{{ $tratamiento->tratamiento }}</span>

                        </div>
                        <div class="md:col-span-1 sm:col-span-1">
                            <span class="text-sm text-gray-900 font-semibold">Costo </span> <br> <span
                                class="text-sm bg-green-400">{{$tratamiento->costo}}</span>
                        </div>
                        <div class="md:col-span-1 sm:col-span-1">
                            <span class="text-sm text-gray-900 font-semibold">Fecha de inicio </span> <br>
                            <span class="text-sm text-gray-900 "> {{date('d/m/Y',
                                strtotime($tratamiento->fecha_inicio))}}</span>

                        </div>

                    </div>
                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                        <div class="md:col-span-3 sm:col-span-1">
                            <span class="text-sm text-gray-900 font-semibold">Fecha de finalizacion</span> <br>
                            @if ($tratamiento->fecha_fin == null)
                            <span class="text-sm text-gray-900 ">Aun no se finalizó</span>
                            @else
                            <span class="text-sm text-gray-900 "> {{date('d/m/Y',
                                strtotime($tratamiento->fecha_fin))}}</span>
                            @endif
                        </div>
                        <div class="md:col-span-3 sm:col-span-1">
                            <span class="text-sm text-gray-900 font-semibold">Observaciones</span> <br>
                            @if ($tratamiento->observaciones != null)
                            <span class="text-sm text-gray-900 ">{{$tratamiento->observaciones}}</span>

                            @else
                            <span class="text-sm text-gray-900 ">No se tienen observaciones</span>
                            @endif
                        </div>
                        <div class="md:col-span-2 sm:col-span-1">
                            <span class="text-sm text-gray-900 font-semibold">Estado</span> <br>

                            @if ($tratamiento->estado == 0)
                            <span class="text-sm text-gray-900 ">En curso</span>
                            @else
                            <span class="text-sm text-gray-900 ">Finalizado</span>
                            @endif

                        </div>
                        <div class="flex justify-start md:col-span-4 sm:col-span-1">

                            @if($tratamiento->estado == 0)

                            <a class=" inline-flex items-center px-4 py-2 mb-3 bg-gray-800 border
                                                                border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-600
                                                                focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
                                                                duration-150" type="button"
                                href="{{ route('tratamiento.finalizar', [$patient->id, $tratamiento->id]) }}">Finalizar
                                Tratamiento</a>
                            @else

                            @endif
                        </div>


                    </div>

                    <hr class="h-px my-3 bg-gray-400">


                    <h2 class="font-medium text-xl text-center">Pagos realizados</h2>



                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">

                                    <table class="min-w-full">
                                        <thead class="bg-gray-800 border-b">
                                            <tr>
                                                <th scope="col"
                                                    class="text-sm font-medium text-white px-6 py-4 text-left">
                                                    <a>Nro</a>
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-white px-6 py-4 text-left">Abonado
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-white px-6 py-4 text-left">Restante

                                                <th scope="col"
                                                    class="text-sm font-medium text-white px-6 py-4 text-left">Fecha
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($pagos as $key => $pago)
                                            <tr
                                                class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    {{$key+1}}</td>
                                                <td class="text-sm text-gray-900  px-6 py-4 whitespace-nowrap">{{
                                                    $pago->abono }}</td>
                                                <td class="text-sm text-gray-900  px-6 py-4 whitespace-nowrap">{{
                                                    $pago->saldo_pendiente
                                                    }}</td>
                                                <td class="text-sm text-gray-900  px-6 py-4 whitespace-nowrap">
                                                    {{date('d/m/Y',
                                                    strtotime($pago->fecha_pago)) }}</td>
                                            </tr>
                                            <tr>

                                            </tr>
                                            @empty
                                            <tr>
                                                <td class="text-gray-900 text-center pt-4" colspan="12">Este paciente
                                                    aun no realizo
                                                    pagos</td>
                                            </tr>
                                            @endforelse
                                            @if(count($pagos) > 0)



                                            @if($pagos->sum('abono') == $tratamiento->costo)

                                            <tr class="bg-green-400">
                                                <td class="w-1/12 py-4 px-6 border-b border-gray-200 text-bold text-xl">
                                                    <b>Total</b>
                                                </td>
                                                <td class="py-4 px-6 border-b border-gray-200 text-bold "> <b>{{
                                                        $pagos->sum('abono')
                                                        }}</b></td>
                                                <td class="py-4 px-6 border-b border-gray-200 text-bold " colspan="2">
                                                    <b>El tratamiento esta pagado</b>
                                                </td>
                                            </tr>
                                            @else
                                            <tr class="bg-orange-300">
                                                <td class="w-1/12 py-4 px-6 border-b border-gray-200 text-bold text-xl">
                                                    <b>Total</b>
                                                </td>
                                                <td class="py-4 px-6 border-b border-gray-200 text-bold " colspan="3">
                                                    <b>{{
                                                        $pagos->sum('abono')
                                                        }}</b>
                                                </td>
                                            </tr>

                                            @endif

                                            @endif
                                        </tbody>
                                    </table>

                                    <br>



                                </div>
                            </div>
                        </div>
</x-app-layout>