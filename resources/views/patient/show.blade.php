<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $patient->nombre }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h3>Datos personales</h3>
                <p>{{ $patient->lugar_nacimiento }}</p>
                <p>{{ $patient->ocupacion }}</p>
                <p>{{ $patient->cedula }}</p>
                <p>{{ $patient->sexo }}</p>
                <p>{{$patient->estado_civil}}</p>
                <p>{{ $patient->direccion }}</p>
                <p>{{ $patient->telefono }}</p>
                <h3>Persona a la que comunicarse en caso de emergencia </h3>
                <p>{{ $patient->nombre_contacto }}</p>
                <p>{{ $patient->telefono_contacto }}</p>
                <p>{{ $patient->nombre_telefono_doctor }}</p>
                <h3>Antecedentes clinicos</h3>

                @if ($patient->tratamiento_medico == 1)
                <p class="font-bold">Tratamiento médico: SI </p>
                @if ($patient->tratamiento_medico_descp == null)
                <p>Tratamiento médico: No especificado</p>
                @else
                <p>Tratamiento médico: {{$patient->tratamiento_medico_descp}}</p>
                @endif
                @else
                <p class="font-bold">Tratamiento médico: NO </p>
                @endif

                @if ($patient->alergias == 1)
                <p class="font-bold">Alergias: SI </p>
                @if ($patient->alergias_descp == null)
                <p>Alergias: No especificado</p>
                @else
                <p>Alergias: {{$patient->alergias_descp}}</p>
                @endif
                @else
                <p class="font-bold">Alergias: NO </p>
                @endif

                @if ($patient->medicamentos_que_toma == 1)
                <p class="font-bold">Medicamentos que toma: SI </p>
                @if ($patient->medicamentos_que_toma_descp == null)
                <p>Medicamentos que toma: No especificado</p>
                @else
                <p>Medicamentos que toma: {{$patient->medicamentos_que_toma_descp}}</p>
                @endif
                @else
                <p class="font-bold">Medicamentos que toma: NO </p>
                @endif


            </div>
        </div>
    </div>
</x-app-layout>