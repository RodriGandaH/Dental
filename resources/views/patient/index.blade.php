<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Pacientes') }}
        </h2>
    </x-slot>

    <div class="py-3">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a class="inline-flex items-center px-4 py-2 mb-3 bg-gray-800 border
    border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-600
    focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
    duration-150" type="button" href="/nuevo-paciente">Nuevo
                    Paciente</a>


                <form action="{{ route('patient.index') }}" method="get">
                    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                        type="text" name="search" value="{{ request()->search }}">
                    <button class="inline-flex items-center px-4 py-2 bg-slate-600 border
    border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-slate-700
    focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
    duration-150" type="submit">Buscar</button>
                </form>
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">

                                <table class="min-w-full">
                                    <thead class="bg-gray-800 border-b">
                                        <tr>
                                            <th scope="col" class=" font-medium text-white px-6 py-4 text-left">
                                                <a
                                                    href="{{ route('patient.index', ['sort' => 'id', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">Id</a>
                                            </th>
                                            <th scope="col" class=" font-medium text-white px-6 py-4 text-left">
                                                <a
                                                    href="{{ route('patient.index', ['sort' => 'nombre', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">Nombre</a>
                                            </th>
                                            {{-- <th class="py-4 px-6 border-b-2 border-gray-200"><a
                                                    href="{{ route('patient.index', ['sort' => 'birthdate', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">Fecha
                                                    de nacimiento</a>
                                            </th> --}}
                                            <th scope="col" class=" font-medium text-white px-6 py-4 text-left">
                                                <a
                                                    href="{{ route('patient.index', ['sort' => 'cedula', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">CI</a>
                                            </th>
                                            <th scope="col" class=" font-medium text-white px-6 py-4 text-left">
                                                <a
                                                    href="{{ route('patient.index', ['sort' => 'telefono', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">Teléfono</a>
                                            </th>
                                            <th scope="col" class=" font-medium text-white px-6 py-4 text-left">
                                                <a
                                                    href="{{ route('patient.index', ['sort' => 'direccion', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">Direccion</a>
                                            </th>
                                            <th scope="col" class=" font-medium text-white px-6 py-4 text-left">
                                                <span>Deuda</span>
                                            </th>
                                            <th scope="col" class=" font-medium text-white px-6 py-4 text-left">
                                                Ver</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($patients as $key => $patient)
                                        <tr
                                            class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                            <td class="px-6 py-4 whitespace-nowrap  font-medium text-gray-900">{{
                                                ($page-1) * 5 + $key + 1
                                                }}</td>
                                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">{{
                                                $patient->nombre }}</td>
                                            {{-- <td class="py-4 px-6 border-b border-gray-200">{{
                                                $patient->fecha_nacimiento }}</td>
                                            --}}
                                            <td class=" text-gray-900 px-6 py-4 whitespace-nowrap">{{
                                                $patient->cedula }}</td>
                                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">{{
                                                $patient->telefono }}</td>
                                            <td class=" text-gray-900  px-6 py-4 whitespace-nowrap">{{
                                                $patient->direccion }}
                                            </td>
                                            <td class=" text-gray-900 px-6 py-4 whitespace-nowrap">{{
                                                $deudas[$patient->id] }}
                                            </td>


                                            <td class="py-4 px-6 border-b border-gray-200">
                                                <a class=" inline-flex items-center px-4 py-2 bg-slate-600 border border-gray-300
                                    rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm
                                    hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-indigo-500
                                    focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"
                                                    type="button"
                                                    href="{{ route('patient.show', ['id' => $patient->id]) }}">Ver</a>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td class="text-center pt-4" colspan="12">No hay pacientes registrados</td>
                                        </tr>
                                        @endforelse
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                {{ $patients->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
