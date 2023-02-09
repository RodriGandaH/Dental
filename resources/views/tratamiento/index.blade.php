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

                    <a class="inline-flex items-center px-4 py-2 mb-3 bg-gray-800 border
        border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-600
        focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
        duration-150" type="button" href="{{ route('tratamiento.create', ['patient' => $patient->id]) }}">Nuevo
                        Tratamiento</a>
                    <a class='inline-flex items-center px-4 py-2 bg-green-500 border
                                                    border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-green-400
                                                    focus:outline-none focus:ring-2 focus:ring-green-700 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
                                                    duration-150 mr-3' type=" button"
                        href="{{ route('patient.show',  $patient->id) }}" style="
                                                height: 34px;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                        </svg></a>
                </div>

                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">

                                <table class="min-w-full">
                                    <thead class="bg-gray-800 border-b">
                                        <tr>
                                            <th scope="col" class=" font-medium text-white px-6 py-4 text-left">
                                                Id
                                            </th>

                                            {{-- <th class="py-4 px-6 border-b-2 border-gray-200"><a
                                                    href="{{ route('patient.index', ['sort' => 'birthdate', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">Fecha
                                                    de nacimiento</a>
                                            </th> --}}
                                            <th scope="col" class=" font-medium text-white px-6 py-4 text-left">
                                                Tratamiento
                                            </th>
                                            <th scope="col" class=" font-medium text-white px-6 py-4 text-left">
                                                Fecha
                                            </th>
                                            <th scope="col" class=" font-medium text-white px-6 py-4 text-left">
                                                Costo
                                            </th>
                                            <th scope="col" class=" font-medium text-white px-6 py-4 text-left">
                                                Abonado
                                            </th>
                                            <th scope="col" class=" font-medium text-white px-6 py-4 text-left">
                                                Restante
                                            <th scope="col" class=" font-medium text-white px-6 py-4 text-left">
                                                Estado
                                            <th scope="col" class=" font-medium text-white px-6 py-4 text-left">
                                                Ver</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($tratamientos as $key => $tratamiento)
                                        <tr
                                            class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                            <td class="px-6 py-4 whitespace-nowrap  font-medium text-gray-900">{{
                                                ($page-1) * 5 + $key + 1
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
                                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap"> <span
                                                    class="bg-orange-400">En
                                                    curso</span>
                                            </td>
                                            @else
                                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">Finalizado
                                            </td>
                                            @endif

                                            {{-- <td class="py-4 px-6 border-b border-gray-200">{{ $tratamiento->abonado
                                                }}</td> --}}

                                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">
                                                <a class=" inline-flex items-center px-4 py-2 bg-slate-600 border border-gray-300
                                                        rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm
                                                        hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500
                                                        focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"
                                                    type="button"
                                                    href="{{ route('tratamiento.show', ['patient' => $patient->id, 'tratamiento' => $tratamiento->id]) }}">Ver</a>
                                            </td>

                                        </tr>
                                        @empty
                                        <tr>
                                            <td class=" text-gray-900 text-center  px-6 py-4 whitespace-nowrap"
                                                colspan="12">

                                                Este paciente
                                                no tiene
                                                tratamientos

                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                {{ $tratamientos->links() }}




            </div>
        </div>
    </div>
</x-app-layout>