<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Tratamientos de ') }} <span>{{$patient->nombre}}</span>
        </h2>
    </x-slot>

    <div class="py-3">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between">

                    <a style="text-decoration:none;" class="inline-flex items-center px-4 py-2 mb-3 bg-gray-800 border
        border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-600
        focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
        duration-150" type="button" href="{{ route('tratamiento.create', ['patient' => $patient->id]) }}">Nuevo
                        Tratamiento</a>
                    <a class='inline-flex items-center px-4 py-2 bg-green-500 border
                                                    border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-green-400
                                                    focus:outline-none focus:ring-2 focus:ring-green-700 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
                                                    duration-150 mr-3' type=" button"
                        href="{{ route('patient.show',  $patient->id) }}" style="text-decoration:none; height: 34px;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                        </svg></a>
                </div>



                <table id="tablaTratamientos" class="table table-striped">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">
                                Id
                            </th>

                            {{-- <th class="py-4 px-6 border-b-2 border-gray-200"><a style="text-decoration:none;"
                                    href="{{ route('patient.index', ['sort' => 'birthdate', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">Fecha
                                    de nacimiento</a>
                            </th> --}}
                            <th scope="col">
                                Tratamiento
                            </th>
                            <th scope="col">
                                Fecha
                            </th>
                            <th scope="col">
                                Costo
                            </th>
                            <th scope="col">
                                Abonado
                            </th>
                            <th scope="col">
                                Restante
                            <th scope="col">
                                Estado
                            <th scope="col">
                                Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tratamientos as $key => $tratamiento)
                        <tr>
                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">{{
                                $key + 1
                                }}</td>
                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">{{
                                $tratamiento->tratamiento
                                }}</td>
                            {{-- <td class="py-4 px-6 border-b border-gray-200">{{
                                $patient->fecha_nacimiento }}</td>
                            --}}
                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">
                                {{ date('d/m/Y', strtotime($tratamiento->fecha_inicio)) }}
                            </td>
                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">{{
                                $tratamiento->costo }}
                            </td>
                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">{{
                                number_format($tratamiento->abonado(),2)
                                }}</td>

                            @if ($tratamiento->saldoPendiente() == 0)
                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">Pagado</td>
                            @else
                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">{{
                                number_format($tratamiento->saldoPendiente(),2) }}</td>
                            @endif
                            @if ($tratamiento->estado == 0)
                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap"> <span class="bg-orange-400">En
                                    curso</span>
                            </td>
                            @else
                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">Finalizado
                            </td>
                            @endif

                            {{-- <td class="py-4 px-6 border-b border-gray-200">{{ $tratamiento->abonado
                                }}</td> --}}

                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">
                                <a style="text-decoration:none;"
                                    class=" inline-flex items-center px-4 py-2 bg-slate-600 border border-gray-300
                                                        rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm
                                                        hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500
                                                        focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150" type="button"
                                    href="{{ route('tratamiento.show', ['patient' => $patient->id, 'tratamiento' => $tratamiento->id]) }}">Ver</a>
                                <a style="text-decoration:none;" class=" inline-flex items-center px-4 py-2 bg-blue-500 border border-gray-300
                                     rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm
                                     hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400
                                     focus:ring-offset-2 disabled:opacity-25 transition"
                                    href="{{ route('tratamiento.edit', ['patient'=> $patient->id, 'tratamiento' => $tratamiento]) }}">Editar</a>

                            </td>

                        </tr>

                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</x-app-layout>