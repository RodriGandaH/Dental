<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pacientes') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a class="inline-flex items-center px-4 py-2 bg-blue-500 border
    border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-600
    focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
    duration-150" type="button" href="/nuevo-paciente">Nuevo
                    Paciente</a>
                <br>
                <br>

                <form action="{{ route('patient.index') }}" method="get">
                    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                        type="text" name="search" value="{{ request()->search }}">
                    <button class="inline-flex items-center px-4 py-2 bg-green-500 border
    border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-green-600
    focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
    duration-150" type="submit">Buscar</button>
                </form>

                <table class="text-left w-full border-collapse mt-6 table-responsive">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-4 px-6 border-b-2 border-gray-200"><a
                                    href="{{ route('patient.index', ['sort' => 'id', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">Id</a>
                            </th>
                            <th class="py-4 px-6 border-b-2 border-gray-200"><a
                                    href="{{ route('patient.index', ['sort' => 'name', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">Nombre</a>
                            </th>
                            <th class="py-4 px-6 border-b-2 border-gray-200"><a
                                    href="{{ route('patient.index', ['sort' => 'birthdate', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">Fecha
                                    de nacimiento</a>
                            </th scope=>
                            <th class="py-4 px-6 border-b-2 border-gray-200"><a
                                    href="{{ route('patient.index', ['sort' => 'ci', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">CI</a>
                            </th>
                            <th class="py-4 px-6 border-b-2 border-gray-200"><a
                                    href="{{ route('patient.index', ['sort' => 'phone', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">Teléfono</a>
                            </th>
                            <th class=" py-4 px-6 border-b-2 border-gray-200 ">
                                <a
                                    href="{{ route('patient.index', ['sort' => 'address', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">Direccion</a>
                            </th>
                            <th class="py-4 px-6 border-b-2 border-gray-200 tex-left">Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($patients as $patient)
                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b border-gray-200">{{ $patient->id }}</td>
                            <td class="py-4 px-6 border-b border-gray-200">{{ $patient->name }}</td>
                            <td class="py-4 px-6 border-b border-gray-200">{{ $patient->birthdate }}</td>
                            <td class="py-4 px-6 border-b border-gray-200">{{ $patient->ci }}</td>
                            <td class="py-4 px-6 border-b border-gray-200">{{ $patient->phone }}</td>
                            <td class="py-4 px-6 border-b border-gray-200">{{ $patient->address }}</td>
                            <td class="py-4 px-6 border-b border-gray-200">
                                <a class=" inline-flex items-center px-4 py-2 bg-blue-500 border border-gray-300
                                    rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm
                                    hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-indigo-500
                                    focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"
                                    type="button" href="{{ route('patient.show', ['id' => $patient->id]) }}">Ver</a>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-center pt-4" colspan="6">No hay pacientes registrados</td>
                            @endforelse
                </table>
                <br>

                {{ $patients->links() }}
            </div>
        </div>
    </div>
</x-app-layout>