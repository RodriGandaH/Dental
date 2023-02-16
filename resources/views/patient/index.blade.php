<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Pacientes') }}
        </h2>
    </x-slot>

    <div class="py-3">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between">

                    <a style="text-decoration:none;" class="inline-flex items-center px-4 py-2 mb-3 bg-gray-800 border
border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-600
focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
duration-150" type="button" href="/nuevo-paciente">Nuevo
                        Paciente</a>
                    <a style="text-decoration:none; height: 34px;"
                        class='inline-flex items-center px-4 py-2 bg-blue-500 border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-400
 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
                                                                                                        duration-150 mr-3' type=" button" href="/pacientes/pdf"
                        target="_blank"> REPORTE PDF
                    </a>
                </div>





                <table id="tablaPacientes" class="table table-striped">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th scope="col">
                                Id
                            </th>
                            <th scope="col">
                                Nombre
                            </th>
                            {{-- <th class="py-4 px-6 border-b-2 border-gray-200"><a style="text-decoration:none;"
                                    href="{{ route('patient.index', ['sort' => 'birthdate', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">Fecha
                                    de nacimiento</a>
                            </th> --}}
                            <th scope="col">
                                CI
                            </th>
                            <th scope="col">
                                Teléfono
                            </th>
                            <th scope="col">
                                Direccion
                            </th>
                            <th scope="col">
                                Deuda
                            </th>
                            <th scope="col">
                                Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patients as $key => $patient)
                        <tr>
                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">{{
                                $key + 1
                                }}</td>
                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">{{
                                $patient->nombre }}</td>
                            {{-- <td class="py-4 px-6 border-b border-gray-200">{{
                                $patient->fecha_nacimiento }}</td>
                            --}}
                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">{{
                                $patient->cedula }}</td>
                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">{{
                                $patient->telefono }}</td>
                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">{{
                                $patient->direccion }}
                            </td>
                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">{{
                                $deudas[$patient->id] }}
                            </td>


                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">
                                <a style="text-decoration:none;" class="inline-flex items-center px-4 py-2 bg-slate-600 border border-gray-300
                                    rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm
                                    hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500
                                    focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"
                                    type="button" href="{{ route('patient.show', ['id' => $patient->id]) }}">Ver</a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>






            </div>

        </div>
    </div>
</x-app-layout>