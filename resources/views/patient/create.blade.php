<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuevo Paciente') }}
        </h2>
    </x-slot>

    <div class="py-12">



        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-success-status class="mb-4" :status="session('message')" />

            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <form action="" method="POST">
                    @csrf
                    <div>
                        <x-input-label for="name" :value="__('Nombre Completo')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" />
                        @error('name')
                        <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <x-input-label for="birthdate" :value="__('Fecha de nacimiento')" />
                        <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate"
                            :value="old('birthdate')" />
                        @error('birthdate')
                        <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <x-input-label for="ci" :value="__('Cédula de identidad')" />
                        <x-text-input id="ci" class="block mt-1 w-full" type="number" name="ci" :value="old('ci')" />
                        @error('ci')
                        <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <x-input-label for="phone" :value="__('Teléfono/Celular')" />
                        <x-text-input id="phone" class="block mt-1 w-full" type="number" name="phone"
                            :value="old('phone')" />
                        @error('phone')
                        <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <x-input-label for="address" :value="__('Direccion')" />
                        <x-text-input id="address" class="block mt-1 w-full" type="text" name="address"
                            :value="old('address')" />
                        @error('address')
                        <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <x-primary-button class="mt-3">
                        {{ __('Guardar Paciente') }}
                    </x-primary-button>

                    <x-secondary-button class="mt-3">
                        {{ __('Cancelar') }}
                    </x-secondary-button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>