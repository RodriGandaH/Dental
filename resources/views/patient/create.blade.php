<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuevo Paciente') }}
        </h2>
    </x-slot>

    <div class="py-2">


        <br>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-success-status class="mb-4" :status="session('message')" />

            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <form action="" method="POST">
                    <h2 class="text-xl font-bold">Datos personales del paciente</h2>
                    <br>
                    <div class="grid md:grid-cols-2 sm:grid-cols-1  gap-4">

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
                            <x-input-label for="nacimiento" :value="__('Lugar de nacimiento')" />
                            <x-text-input id="nacimiento" class="block mt-1 w-full" type="text" name="nacimiento"
                                :value="old('nacimiento')" />
                            @error('nacimiento')
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
                            <x-input-label for="ocupacion" :value="__('Ocupacion')" />
                            <x-text-input id="ocupacion" class="block mt-1 w-full" type="text" name="ocupacion"
                                :value="old('ocupacion')" />
                            @error('ocupacion')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <x-input-label for="sexo" :value="__('Sexo')" />
                            <select id="sexo" name="sexo"
                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Selecciona el sexo</option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
                            @error('sexo')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>


                        <div>
                            <x-input-label for="ci" :value="__('Cédula de identidad')" />
                            <x-text-input id="ci" class="block mt-1 w-full" type="number" name="ci"
                                :value="old('ci')" />
                            @error('ci')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <x-input-label for="estadoCivil" :value="__('Estado civil')" />
                            <select id="estadoCivil" name="estadoCivil"
                                class="my-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Selecciona el estado civil</option>
                                <option value="S">Soltero(a)</option>
                                <option value="C">Casado(a)</option>
                                <option value="D">Divorciado(a)</option>
                                <option value="V">Viudo(a)</option>
                            </select>
                            @error('estadoCivil')
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
                            <x-input-label for="address" :value="__('Dirección')" />
                            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address"
                                :value="old('address')" />
                            @error('address')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>



                    </div>
                    <br>
                    <h2 class="text-xl font-bold">Persona a la que comunicarse en caso de emergencia</h2>
                    <br>
                    <div class="grid md:grid-cols-2 sm:grid-cols-1  gap-4">


                        <div>
                            <x-input-label for="name2" :value="__('Nombre Completo')" />
                            <x-text-input id="name2" class="block mt-1 w-full" type="text" name="name2"
                                :value="old('name2')" />
                            @error('name2')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <x-input-label for="phone2" :value="__('Teléfono/Celular')" />
                            <x-text-input id="phone2" class="block mt-1 w-full" type="number" name="phone2"
                                :value="old('phone2')" />
                            @error('phone2')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <x-input-label for="name3" :value="__('Nombre y telefono de su medico')" />
                            <x-text-input id="name3" class="block mt-1 w-full" type="text" name="name3"
                                :value="old('name3')" />

                        </div>
                    </div>
                    <br>
                    <h2 class="text-xl font-bold">Responder SI o NO</h2>
                    <br>
                    <div class="grid md:grid-cols-2 sm:grid-cols-1  gap-4">
                        <div>
                            <x-input-label for="tratamiento_medico" :value="__('¿ Esta en tratamiento médico ?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="tratamiento_medico" value="1" class="form-radio" />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="tratamiento_medico" value="0" class="form-radio" />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="tratamiento_medico_descp" placeholder="Descripcion"
                                class="block mt-1 w-full" type="text" name="tratamiento_medico_descp"
                                :value="old('tratamiento_medico_descp')" />

                            @error('tratamiento_medico')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>


                        <div>

                            <x-input-label for="alergia" :value="__('¿Tiene algun tipo de alergia?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="alergia" value="1" class="form-radio" />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="alergia" value="0" class="form-radio" />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="alergia_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="alergia_descp" :value="old('alergia_descp')" />
                            @error('alergia')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror

                        </div>

                        <div>
                            <x-input-label for="medicamento" :value="__('Toma algun tipo de medicamento?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="medicamento" value="1" class="form-radio" />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="medicamento" value="0" class="form-radio" />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="medicamento_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="medicamento_descp" :value="old('medicamento_descp')" />
                            @error('alergia')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <x-input-label for="antibioticos" :value="__('Toma algun tipo de antibioticos?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="antibioticos" value="1" class="form-radio" />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="antibioticos" value="0" class="form-radio" />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="antibioticos_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="antibioticos_descp" :value="old('antibioticos_descp')" />
                            @error('antibioticos')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <x-input-label for="corazon" :value="__('Esta enfermo del corazon?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="corazon" value="1" class="form-radio" />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="corazon" value="0" class="form-radio" />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="corazon_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="corazon_descp" :value="old('corazon_descp')" />
                            @error('corazon')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>


                        <div>
                            <x-input-label for="hepatitis" :value="__('Tiene hepatitis?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="hepatitis" value="1" class="form-radio" />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="hepatitis" value="0" class="form-radio" />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="hepatitis_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="corazon_descp" :value="old('hepatitis_descp')" />
                            @error('hepatitis')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>


                        <div>
                            <x-input-label for="diabetes" :value="__('Tiene diabetes?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="diabetes" value="1" class="form-radio" />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="diabetes" value="0" class="form-radio" />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="diabetes_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="diabetes_descp" :value="old('diabetes_descp')" />
                            @error('diabetes')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>


                        <div>
                            <x-input-label for="sifilis" :value="__('Tiene o tuvo sífilis?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="sifilis" value="1" class="form-radio" />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="sifilis" value="0" class="form-radio" />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="diabetes_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="sifilis_descp" :value="old('sifilis_descp')" />
                            @error('sifilis')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <x-input-label for="desmayos" :value="__('Tiene desmayos con frecuencia?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="desmayos" value="1" class="form-radio" />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="desmayos" value="0" class="form-radio" />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="desmayos_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="desmayos_descp" :value="old('desmayos_descp')" />
                            @error('desmayos')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <x-input-label for="sangra"
                                :value="__('Sangra mucho cuando se corta o extraen un diente?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="sangra" value="1" class="form-radio" />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="sangra" value="0" class="form-radio" />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="sangra_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="sangra_descp" :value="old('sangra_descp')" />
                            @error('sangra')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <x-input-label for="cicatrizar" :value="__('Tarda mucho en cicatrizar sus heridas?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="cicatrizar" value="1" class="form-radio" />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="cicatrizar" value="0" class="form-radio" />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="cicatrizar_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="cicatrizar_descp" :value="old('cicatrizar_descp')" />
                            @error('cicatrizar')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>


                        <div>
                            <x-input-label for="sida" :value="__('Tiene SIDA?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="sida" value="1" class="form-radio" />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="sida" value="0" class="form-radio" />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="sida_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="sida_descp" :value="old('sida_descp')" />
                            @error('sida')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>



                    </div>

                    <div class="flex justify-between">
                        <x-primary-button class="mt-3 ml-3">
                            {{ __('Guardar Paciente') }}
                        </x-primary-button>

                        <a class='inline-flex items-center px-4 mt-3 py-2 bg-red-600 border
        border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-red-400
        focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
        duration-150 mr-3' type=" button" href="/pacientes" style="
    height: 34px;">
                            Cancelar</a>

                    </div>




                </form>

            </div>

        </div>

    </div>
</x-app-layout>