<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $patient->name }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <p>{{ $patient->telephone }}</p>
                <p>{{ $patient->address }}</p>
                <p>{{ $patient->ci }}</p>
                <p>{{ $patient->birthdate }}</p>
            </div>
        </div>
    </div>
</x-app-layout>