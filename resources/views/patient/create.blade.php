<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuevo Paciente') }}
        </h2>
    </x-slot>

    <div class="py-2">


        <br>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-success-status class="mb-4" :status="session('comentarios')" />

            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <form action="" method="POST">
                    <h2 class="text-xl font-bold">Datos personales del paciente</h2>
                    <br>
                    <div class="grid md:grid-cols-2 sm:grid-cols-1  gap-4">

                        @csrf
                        <div>
                            <x-input-label for="nombre" :value="__('Nombre Completo')" />
                            <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                                :value="old('nombre')" />
                            @error('nombre')
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
                            @enderror
                        </div>

                        <div>
                            <x-input-label for="lugar_nacimiento" :value="__('Lugar de nacimiento')" />
                            <x-text-input id="lugar_nacimiento" class="block mt-1 w-full" type="text"
                                name="lugar_nacimiento" :value="old('lugar_nacimiento')" />
                            @error('lugar_nacimiento')
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
                            @enderror
                        </div>







                        <div>
                            <x-input-label for="fecha_nacimiento" :value="__('Fecha de nacimiento')" />
                            <x-text-input id="fecha_nacimiento" class="block mt-1 w-full" type="date"
                                name="fecha_nacimiento" :value="old('fecha_nacimiento')" />
                            @error('fecha_nacimiento')
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
                            @enderror
                        </div>

                        <div>
                            <x-input-label for="ocupacion" :value="__('Ocupacion')" />
                            <x-text-input id="ocupacion" class="block mt-1 w-full" type="text" name="ocupacion"
                                :value="old('ocupacion')" />
                            @error('ocupacion')
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
                            @enderror
                        </div>

                        <div>
                            <x-input-label for="sexo" :value="__('Sexo')" />
                            <select id="sexo" name="sexo"
                                class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="seleccionar" selected>Selecciona el sexo</option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
                            @error('sexo')
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
                            @enderror
                        </div>


                        <div>
                            <x-input-label for="cedula" :value="__('Cédula de identidad')" />
                            <x-text-input id="cedula" class="block mt-1 w-full" type="number" name="cedula"
                                :value="old('cedula')" />
                            @error('cedula')
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
                            @enderror
                        </div>

                        <div>
                            <x-input-label for="estado_civil" :value="__('Estado civil')" />
                            <select id="estado_civil" name="estado_civil"
                                class="my-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="estado" selected>Selecciona el estado civil</option>
                                <option value="S">Soltero(a)</option>
                                <option value="C">Casado(a)</option>
                                <option value="D">Divorciado(a)</option>
                                <option value="V">Viudo(a)</option>
                            </select>
                            @error('estado_civil')
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
                            @enderror
                        </div>

                        <div>
                            <x-input-label for="telefono" :value="__('Teléfono/Celular')" />
                            <x-text-input id="telefono" class="block mt-1 w-full" type="number" name="telefono"
                                :value="old('telefono')" />
                            @error('telefono')
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
                            @enderror
                        </div>
                        <div>
                            <x-input-label for="direccion" :value="__('Dirección')" />
                            <x-text-input id="direccion" class="block mt-1 w-full" type="text" name="direccion"
                                :value="old('direccion')" />
                            @error('direccion')
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
                            @enderror
                        </div>



                    </div>
                    <br>
                    <h2 class="text-xl font-bold">Persona a la que comunicarse en caso de emergencia</h2>
                    <br>
                    <div class="grid md:grid-cols-2 sm:grid-cols-1  gap-4">


                        <div>
                            <x-input-label for="nombre_contacto" :value="__('Nombre Completo')" />
                            <x-text-input id="nombre_contacto" class="block mt-1 w-full" type="text"
                                name="nombre_contacto" :value="old('nombre_contacto')" />
                            @error('nombre_contacto')
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
                            @enderror
                        </div>
                        <div>
                            <x-input-label for="telefono_contacto" :value="__('Teléfono/Celular')" />
                            <x-text-input id="telefono_contacto" class="block mt-1 w-full" type="number"
                                name="telefono_contacto" :value="old('telefono_contacto')" />
                            @error('telefono_contacto')
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
                            @enderror
                        </div>
                        <div>
                            <x-input-label for="nombre_telefono_doctor" :value="__('Nombre y telefono de su medico')" />
                            <x-text-input id="nombre_telefono_doctor" placeholder="Opcional" class="block mt-1 w-full"
                                type="text" name="nombre_telefono_doctor" :value="old('nombre_telefono_doctor')" />

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
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
                            @enderror
                        </div>


                        <div>

                            <x-input-label for="alergias" :value="__('¿Tiene algun tipo de alergia?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="alergias" value="1" class="form-radio" />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="alergias" value="0" class="form-radio" />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="alergias_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="alergias_descp" :value="old('alergias_descp')" />
                            @error('alergias')
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
                            @enderror

                        </div>

                        <div>
                            <x-input-label for="medicamentos_que_toma" :value="__('Toma algun tipo de medicamento?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="medicamentos_que_toma" value="1" class="form-radio" />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="medicamentos_que_toma" value="0" class="form-radio" />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="medicamentos_que_toma_descp" placeholder="Descripcion"
                                class="block mt-1 w-full" type="text" name="medicamentos_que_toma_descp"
                                :value="old('medicamentos_que_toma_descp')" />
                            @error('medicamentos_que_toma')
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
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
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
                            @enderror
                        </div>

                        <div>
                            <x-input-label for="enfermo_del_corazon" :value="__('Esta enfermo del corazon?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="enfermo_del_corazon" value="1" class="form-radio" />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="enfermo_del_corazon" value="0" class="form-radio" />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="enfermo_del_corazon_descp" placeholder="Descripcion"
                                class="block mt-1 w-full" type="text" name="enfermo_del_corazon_descp"
                                :value="old('enfermo_del_corazon_descp')" />
                            @error('enfermo_del_corazon')
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
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
                                type="text" name="hepatitis_descp" :value="old('hepatitis_descp')" />
                            @error('hepatitis')
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
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
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
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
                            <x-text-input id="sifilis_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="sifilis_descp" :value="old('sifilis_descp')" />
                            @error('sifilis')
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
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
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
                            @enderror
                        </div>

                        <div>
                            <x-input-label for="sangra_mucho"
                                :value="__('Sangra mucho cuando se corta o extraen un diente?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="sangra_mucho" value="1" class="form-radio" />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="sangra_mucho" value="0" class="form-radio" />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="sangra_mucho_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="sangra_mucho_descp" :value="old('sangra_mucho_descp')" />
                            @error('sangra_mucho')
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
                            @enderror
                        </div>

                        <div>
                            <x-input-label for="cicratizar_heridas"
                                :value="__('Tarda mucho en cicatrizar sus heridas?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="cicratizar_heridas" value="1" class="form-radio" />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="cicratizar_heridas" value="0" class="form-radio" />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="cicratizar_heridas_descp" placeholder="Descripcion"
                                class="block mt-1 w-full" type="text" name="cicratizar_heridas_descp"
                                :value="old('cicratizar_heridas_descp')" />
                            @error('cicratizar_heridas')
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
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
                            <span class="text-sm text-red-600 space-y-1">{{ $comentarios }}</span>
                            @enderror
                        </div>


                    </div>


                    <label for="comentarios"
                        class="block mb-2 text-sm font-medium mt-3 text-gray-900 dark:text-white">Comentarios</label>
                    <textarea id="comentarios" rows="4" name="comentarios"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Escribe los comentarios aqui..."></textarea>

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