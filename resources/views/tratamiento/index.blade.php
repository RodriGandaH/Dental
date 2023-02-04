<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Tratamientos de ') }} <span>{{$patient->nombre}}</span>
        </h2>
    </x-slot>

    <div class="py-3">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a class="inline-flex items-center px-4 py-2 mb-3 bg-gray-800 border
    border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-600
    focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
    duration-150" type="button" href="{{ route('tratamiento.create', ['patient' => $patient->id]) }}">Nuevo
                    Tratamiento</a>

                <table class=" text-left w-full border-collapse mt-6 table-responsive">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-4 px-6 border-b-2 border-gray-200"><a>Id</a>
                            </th>

                            {{-- <th class="py-4 px-6 border-b-2 border-gray-200"><a
                                    href="{{ route('patient.index', ['sort' => 'birthdate', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">Fecha
                                    de nacimiento</a>
                            </th> --}}
                            <th class="py-4 px-6 border-b-2 border-gray-200"><a>Tratamiento</a>
                            </th>
                            <th class="py-4 px-6 border-b-2 border-gray-200"><a>Fecha</a>
                            </th>
                            <th class=" py-4 px-6 border-b-2 border-gray-200 ">
                                <a>Costo</a>
                            </th>
                            <th class="py-4 px-6 border-b-2 border-gray-200"><a>Abonado</a>
                            </th>
                            <th class="py-4 px-6 border-b-2 border-gray-200"><a>Restante</a>
                            <th class="py-4 px-6 border-b-2 border-gray-200"><a>Estado</a>
                            <th class="py-4 px-6 border-b-2 border-gray-200 tex-left">Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tratamientos as $key => $tratamiento)
                        <tr class="hover:bg-gray-200">
                            <td class="w-1/12 py-4 px-6 border-b border-gray-200">{{$key+1}}</td>
                            <td class="py-4 px-6 border-b border-gray-200">{{ $tratamiento->tratamiento }}</td>
                            {{-- <td class="py-4 px-6 border-b border-gray-200">{{ $patient->fecha_nacimiento }}</td>
                            --}}
                            <td class="py-4 px-6 border-b border-gray-200">{{ $tratamiento->fecha_inicio }}</td>
                            <td class="py-4 px-6 border-b border-gray-200">{{ $tratamiento->costo }}</td>
                            <td class="py-4 px-6 border-b border-gray-200">{{ number_format($tratamiento->abonado(),2)
                                }}</td>

                            @if ($tratamiento->saldoPendiente() == 0)
                            <td class="py-4 px-6 border-b border-gray-200">Pagado</td>
                            @else
                            <td class="py-4 px-6 border-b border-gray-200">{{
                                number_format($tratamiento->saldoPendiente(),2) }}</td>
                            @endif
                            @if ($tratamiento->estado == 0)
                            <td class="py-4 px-6 border-b border-gray-200">En curso</td>
                            @else
                            <td class="py-4 px-6 border-b border-gray-200">Finalizado</td>
                            @endif

                            {{-- <td class="py-4 px-6 border-b border-gray-200">{{ $tratamiento->abonado }}</td> --}}

                            <td>
                                <a class=" inline-flex items-center px-4 py-2 bg-blue-500 border border-gray-300
                                                        rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm
                                                        hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-indigo-500
                                                        focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"
                                    type="button"
                                    href="{{ route('tratamiento.show', ['patient' => $patient->id, 'tratamiento' => $tratamiento->id]) }}">Ver</a>
                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td class="text-center pt-4 m-auto" colspan="12">Este paciente no tiene tratamientos</td>
                            @endforelse
                    </tbody>
                </table>
                <br>

                {{ $tratamientos->links() }}




            </div>
        </div>
    </div>
</x-app-layout>