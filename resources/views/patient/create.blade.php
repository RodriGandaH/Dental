<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Nuevo Paciente') }}
        </h2>
    </x-slot>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-success-status class="mb-4" :status="session('message')" />
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="" method="POST">
                    <div class="flex justify-between">

                        <h2 class="text-xl font-semibold text-gray-900">Datos personales del paciente</h2>
                        <a class='inline-flex items-center px-4 py-2 bg-green-500 border
                                                                                                border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-green-400
                                                                                                focus:outline-none focus:ring-2 focus:ring-green-700 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
                                                                                                duration-150 mr-3'
                            type=" button" href="/pacientes" style="
                                                                                            height: 34px;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                            </svg></a>
                    </div>
                    <br>
                    {{-- <div class="grid md:grid-cols-2 sm:grid-cols-1  gap-4"> --}}
                        @csrf
                        <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2">
                            <div class="md:col-span-4 sm:col-span-1">
                                <x-input-label for="nombre" :value="__('Nombre completo')" />
                                <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                                    :value="old('nombre')" />
                                @error('nombre')
                                <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="md:col-span-2 sm:col-span-1">
                                <x-input-label for="lugar_nacimiento" :value="__('Lugar de nacimiento')" />
                                <x-text-input id="lugar_nacimiento" class="block mt-1 w-full" type="text"
                                    name="lugar_nacimiento" :value="old('lugar_nacimiento')" />
                                @error('lugar_nacimiento')
                                <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="md:col-span-2 sm:col-span-1">
                                <x-input-label for="fecha_nacimiento" :value="__('Fecha de nacimiento')" />
                                <x-text-input id="fecha_nacimiento" class="block mt-1 w-full" type="date"
                                    name="fecha_nacimiento" :value="old('fecha_nacimiento')" />
                                @error('fecha_nacimiento')
                                <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="md:col-span-2 sm:col-span-1">
                                <x-input-label for="ocupacion" :value="__('Ocupacion')" />
                                <x-text-input id="ocupacion" class="block mt-1 w-full" type="text" name="ocupacion"
                                    :value="old('ocupacion')" />
                                @error('ocupacion')
                                <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="md:col-span-2 sm:col-span-1">
                                <x-input-label for="sexo" :value="__('Sexo')" />
                                <select id="sexo" name="sexo"
                                    class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                    <option value="seleccionar" selected>Selecciona el sexo</option>
                                    <option value="M" {{ old('sexo')=='M' ? 'selected' : '' }}>Masculino
                                    </option>
                                    <option value="F" {{ old('sexo')=='F' ? 'selected' : '' }}>Femenino</option>
                                </select>
                                @error('sexo')
                                <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                            <div class="md:col-span-2 sm:col-span-1">
                                <x-input-label for="cedula" :value="__('Cédula de identidad')" />
                                <x-text-input id="cedula" class="block mt-1 w-full" type="number" name="cedula"
                                    :value="old('cedula')" />
                                @error('cedula')
                                <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="md:col-span-2 sm:col-span-1">
                                <x-input-label for="estado_civil" :value="__('Estado civil')" />
                                <select id="estado_civil" name="estado_civil"
                                    class="my-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="estado" selected>Selecciona el estado civil</option>
                                    <option value="S" {{ old('estado_civil')=='S' ? 'selected' : '' }}>Soltero(a)
                                    </option>
                                    <option value="CC" {{ old('estado_civil')=='CC' ? 'selected' : '' }}>Concubino(a)
                                    </option>
                                    <option value="C" {{ old('estado_civil')=='C' ? 'selected' : '' }}>Casado(a)
                                    </option>
                                    <option value="D" {{ old('estado_civil')=='D' ? 'selected' : '' }}>Divorciado(a)
                                    </option>
                                    <option value="V" {{ old('estado_civil')=='V' ? 'selected' : '' }}>Viudo(a)</option>
                                </select>
                                @error('estado_civil')
                                <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="md:col-span-2 sm:col-span-1">
                                <x-input-label for="telefono" :value="__('Teléfono/Celular')" />
                                <x-text-input id="telefono" class="block mt-1 w-full" type="number" name="telefono"
                                    :value="old('telefono')" />
                                @error('telefono')
                                <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="md:col-span-6 sm:col-span-1">
                                <x-input-label for="direccion" :value="__('Dirección')" />
                                <x-text-input id="direccion" class="block mt-1 w-full" type="text" name="direccion"
                                    :value="old('direccion')" />
                                @error('direccion')
                                <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        {{--
                    </div> --}}
                    <hr class="h-px my-3 bg-gray-400 border-1">
                    <h2 class="text-xl font-semibold text-gray-900 mt-4">Persona a la que comunicarse en caso de
                        emergencia</h2>
                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                        <div class="md:col-span-4 sm:col-span-1">
                            <x-input-label for="nombre_contacto" :value="__('Nombre Completo')" />
                            <x-text-input id="nombre_contacto" class="block mt-1 w-full" type="text"
                                name="nombre_contacto" :value="old('nombre_contacto')" />
                            @error('nombre_contacto')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="md:col-span-2 sm:col-span-1">
                            <x-input-label for="telefono_contacto" :value="__('Teléfono/Celular')" />
                            <x-text-input id="telefono_contacto" class="block mt-1 w-full" type="number"
                                name="telefono_contacto" :value="old('telefono_contacto')" />
                            @error('telefono_contacto')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="md:col-span-6 sm:col-span-1">
                            <x-input-label for="nombre_telefono_doctor" :value="__('Nombre y telefono de su medico')" />
                            <x-text-input id="nombre_telefono_doctor" placeholder="Opcional" class="block mt-1 w-full"
                                type="text" name="nombre_telefono_doctor" :value="old('nombre_telefono_doctor')" />
                        </div>
                    </div>
                    <hr class="h-px my-3 bg-gray-400 border-1 ">
                    <h2 class="text-xl font-semibold text-gray-900 mt-4">Responder SI o NO</h2>
                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                        <div class="md:col-span-4 sm:col-span-1">
                            <x-input-label for="tratamiento_medico" :value="__('¿ Esta en tratamiento médico ?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="tratamiento_medico" value="1" class="form-radio" {{
                                        old('tratamiento_medico', -1)==1 ? 'checked' : '' }} />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="tratamiento_medico" value="0" class="form-radio" {{
                                        old('tratamiento_medico', -1)==0 ? 'checked' : '' }} />
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
                        <div class="md:col-span-4 sm:col-span-1">
                            <x-input-label for="alergias" :value="__('¿Tiene algun tipo de alergia?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="alergias" value="1" class="form-radio" {{ old('alergias',
                                        -1)==1 ? 'checked' : '' }} />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="alergias" value="0" class="form-radio" {{ old('alergias',
                                        -1)==0 ? 'checked' : '' }} />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="alergias_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="alergias_descp" :value="old('alergias_descp')" />
                            @error('alergias')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="md:col-span-4 sm:col-span-1">
                            <x-input-label for="medicamentos_que_toma" :value="__('Toma algun tipo de medicamento?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="medicamentos_que_toma" value="1" class="form-radio" {{
                                        old('medicamentos_que_toma', -1)==1 ? 'checked' : '' }} />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="medicamentos_que_toma" value="0" class="form-radio" {{
                                        old('medicamentos_que_toma', -1)==0 ? 'checked' : '' }} />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="medicamentos_que_toma_descp" placeholder="Descripcion"
                                class="block mt-1 w-full" type="text" name="medicamentos_que_toma_descp"
                                :value="old('medicamentos_que_toma_descp')" />
                            @error('medicamentos_que_toma')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                        <div class="md:col-span-4 sm:col-span-1">
                            <x-input-label for="antibioticos" :value="__('Toma algun tipo de antibioticos?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="antibioticos" value="1" class="form-radio" {{
                                        old('antibioticos', -1)==1 ? 'checked' : '' }} />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="antibioticos" value="0" class="form-radio" {{
                                        old('antibioticos', -1)==0 ? 'checked' : '' }} />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="antibioticos_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="antibioticos_descp" :value="old('antibioticos_descp')" />
                            @error('antibioticos')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="md:col-span-4 sm:col-span-1">
                            <x-input-label for="enfermo_del_corazon" :value="__('Esta enfermo del corazon?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="enfermo_del_corazon" value="1" class="form-radio" {{
                                        old('enfermo_del_corazon', -1)==1 ? 'checked' : '' }} />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="enfermo_del_corazon" value="0" class="form-radio" {{
                                        old('enfermo_del_corazon', -1)==0 ? 'checked' : '' }} />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="enfermo_del_corazon_descp" placeholder="Descripcion"
                                class="block mt-1 w-full" type="text" name="enfermo_del_corazon_descp"
                                :value="old('enfermo_del_corazon_descp')" />
                            @error('enfermo_del_corazon')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="md:col-span-4 sm:col-span-1">
                            <x-input-label for="hepatitis" :value="__('Tiene hepatitis?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="hepatitis" value="1" class="form-radio" {{
                                        old('hepatitis', -1)==1 ? 'checked' : '' }} />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="hepatitis" value="0" class="form-radio" {{
                                        old('hepatitis', -1)==0 ? 'checked' : '' }} />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="hepatitis_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="hepatitis_descp" :value="old('hepatitis_descp')" />
                            @error('hepatitis')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                        <div class="md:col-span-4 sm:col-span-1">
                            <x-input-label for="diabetes" :value="__('Tiene diabetes?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="diabetes" value="1" class="form-radio" {{
                                        old('diabetes',-1)==1 ? 'checked' : '' }} />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="diabetes" value="0" class="form-radio" {{
                                        old('diabetes',-1)==0 ? 'checked' : '' }} />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="diabetes_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="diabetes_descp" :value="old('diabetes_descp')" />
                            @error('diabetes')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="md:col-span-4 sm:col-span-1">
                            <x-input-label for="sifilis" :value="__('Tiene o tuvo sífilis?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="sifilis" value="1" class="form-radio" {{
                                        old('sifilis',-1)==1 ? 'checked' : '' }} />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="sifilis" value="0" class="form-radio" {{
                                        old('sifilis',-1)==0 ? 'checked' : '' }} />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="sifilis_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="sifilis_descp" :value="old('sifilis_descp')" />
                            @error('sifilis')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="md:col-span-4 sm:col-span-1">
                            <x-input-label for="desmayos" :value="__('Tiene desmayos con frecuencia?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="desmayos" value="1" class="form-radio" {{
                                        old('desmayos',-1)==1 ? 'checked' : '' }} />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="desmayos" value="0" class="form-radio" {{
                                        old('desmayos',-1)==0 ? 'checked' : '' }} />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="desmayos_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="desmayos_descp" :value="old('desmayos_descp')" />
                            @error('desmayos')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                        <div class="md:col-span-4 sm:col-span-1">
                            <x-input-label for="sangra_mucho"
                                :value="__('Sangra mucho cuando se corta o extraen un diente?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="sangra_mucho" value="1" class="form-radio" {{
                                        old('sangra_mucho',-1)==1 ? 'checked' : '' }} />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="sangra_mucho" value="0" class="form-radio" {{
                                        old('sangra_mucho',-1)==0 ? 'checked' : '' }} />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="sangra_mucho_descp" placeholder="Descripcion" class="block mt-1 w-full"
                                type="text" name="sangra_mucho_descp" :value="old('sangra_mucho_descp')" />
                            @error('sangra_mucho')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="md:col-span-4 sm:col-span-1">
                            <x-input-label for="cicatrizar_heridas"
                                :value="__('Tarda mucho en cicatrizar sus heridas?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="cicatrizar_heridas" value="1" class="form-radio" {{
                                        old('cicatrizar_heridas',-1)==1 ? 'checked' : '' }} />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="cicatrizar_heridas" value="0" class="form-radio" {{
                                        old('cicatrizar_heridas',-1)==0 ? 'checked' : '' }} />
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                            <x-text-input id="cicatrizar_heridas_descp" placeholder="Descripcion"
                                class="block mt-1 w-full" type="text" name="cicatrizar_heridas_descp"
                                :value="old('cicatrizar_heridas_descp')" />
                            @error('cicatrizar_heridas')
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="md:col-span-4 sm:col-span-1">
                            <x-input-label for="sida" :value="__('Tiene SIDA?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="sida" value="1" class="form-radio" {{ old('sida',-1)==1
                                        ? 'checked' : '' }} />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="sida" value="0" class="form-radio" {{ old('sida',-1)==0
                                        ? 'checked' : '' }} />
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
                    <hr class="h-px my-3 bg-gray-400 border-1">

                    <label for="comentarios"
                        class="block mb-2 text-sm font-medium mt-3 text-gray-900 ">Comentarios</label>
                    <textarea id="comentarios" rows="4" name="comentarios"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Escribe el comentario aqui...">{{old('comentarios')}}</textarea>
                    <div class="flex justify-between">
                        <x-primary-button class="mt-3 ml-3">
                            {{ __(' Guardar') }} </x-primary-button>
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

{{-- Codigo javascript --}}

<script>
    window.onload = function(){
        //Obtener los elementos del DOM

        //tratamientos medicos
        const tratamiento_medico_descp = document.querySelector('#tratamiento_medico_descp');
        const tratamiento_medico_radio = document.querySelectorAll('input[name="tratamiento_medico"]');
        tratamiento_medico_descp.style.display = 'none';
        let tratamiendo_medico_value ='';

        if(tratamiento_medico_radio[0].checked){
        tratamiento_medico_descp.style.display = 'block';
        tratamiendo_medico_value = tratamiento_medico_descp.value;
        } else if (tratamiento_medico_radio[1].checked){
        tratamiento_medico_descp.style.display = 'none';
        tratamiendo_medico_value = tratamiento_medico_descp.value;
        tratamiento_medico_descp.value = '';
        }

        tratamiento_medico_radio.forEach(button => {
        button.addEventListener('click', () => {
        if (button.value === '1') {
        tratamiento_medico_descp.style.display = 'block';
        tratamiento_medico_descp.value=tratamiendo_medico_value;
        } else {
        tratamiento_medico_descp.style.display = 'none';
        tratamiendo_medico_value = tratamiento_medico_descp.value;
        tratamiento_medico_descp.value = '';
        }
        });
        });

        // alergias
        const alergias_radio = document.querySelectorAll('input[name="alergias"]');
        const alergias_descp = document.querySelector('#alergias_descp');
        let alergia_value = '';
        alergias_descp.style.display = 'none';

        if(alergias_radio[0].checked){
        alergias_descp.style.display = 'block';

        alergia_value = alergias_descp.value;
        } else if (alergias_radio[1].checked){
        alergias_descp.style.display = 'none';
        alergias_descp.value = '';
        }

        alergias_radio.forEach(button => {
        button.addEventListener('click', () => {
        if (button.value === '1') {
        alergias_descp.style.display = 'block';
        alergias_descp.value = alergia_value;
        } else {
        alergias_descp.style.display = 'none';
        alergia_value = alergias_descp.value;
        alergias_descp.value = '';
        }
        });
        });

        // medicamentos
        const medicamentos_que_toma_radio = document.querySelectorAll('input[name="medicamentos_que_toma"]');
        const medicamentos_que_toma_descp = document.querySelector('#medicamentos_que_toma_descp');
        let medicamentos_value = '';
        medicamentos_que_toma_descp.style.display = 'none';

        if(medicamentos_que_toma_radio[0].checked){
        medicamentos_que_toma_descp.style.display = 'block';
        medicamentos_value = medicamentos_que_toma_descp.value;
        } else if (medicamentos_que_toma_radio[1].checked){
        medicamentos_que_toma_descp.style.display = 'none';
        medicamentos_que_toma_descp.value = '';
        }

        medicamentos_que_toma_radio.forEach(button => {
        button.addEventListener('click', () => {
        if (button.value === '1') {
        medicamentos_que_toma_descp.style.display = 'block';
        medicamentos_que_toma_descp.value = medicamentos_value;
        } else {
        medicamentos_que_toma_descp.style.display = 'none';
        medicamentos_value = medicamentos_que_toma_descp.value;
        medicamentos_que_toma_descp.value = '';
        }
        });
        });

        // antibioticos
        const antibioticos_radio = document.querySelectorAll('input[name="antibioticos"]');
        const antibioticos_descp = document.querySelector('#antibioticos_descp');
        let antibioticos_value = '';
        antibioticos_descp.style.display = 'none';

        if(antibioticos_radio[0].checked){
        antibioticos_descp.style.display = 'block';
        antibioticos_value = antibioticos_descp.value;
        } else if (antibioticos_radio[1].checked){
        antibioticos_descp.style.display = 'none';
        antibioticos_descp.value = '';
        }

        antibioticos_radio.forEach(button => {
        button.addEventListener('click', () => {
        if (button.value === '1') {
        antibioticos_descp.style.display = 'block';
        antibioticos_descp.value = antibioticos_value;
        } else {
        antibioticos_descp.style.display = 'none';
        antibioticos_value = antibioticos_descp.value;
        antibioticos_descp.value = '';
        }
        });
        });

        // Enfermo del corazón
        const enfermo_del_corazon_radio = document.querySelectorAll('input[name="enfermo_del_corazon"]');
        const enfermo_del_corazon_descp = document.querySelector('#enfermo_del_corazon_descp');
        let enfermo_del_corazon_value = '';
        enfermo_del_corazon_descp.style.display = 'none';

        if (enfermo_del_corazon_radio[0].checked) {
        enfermo_del_corazon_descp.style.display = 'block';
        enfermo_del_corazon_value = enfermo_del_corazon_descp.value;
        } else if (enfermo_del_corazon_radio[1].checked) {
        enfermo_del_corazon_descp.style.display = 'none';
        enfermo_del_corazon_descp.value = '';
        }

        enfermo_del_corazon_radio.forEach(button => {
        button.addEventListener('click', () => {
        if (button.value === '1') {
        enfermo_del_corazon_descp.style.display = 'block';
        enfermo_del_corazon_descp.value = enfermo_del_corazon_value;
        } else {
        enfermo_del_corazon_descp.style.display = 'none';
        enfermo_del_corazon_value = enfermo_del_corazon_descp.value;
        enfermo_del_corazon_descp.value = '';
        }
        });
        });

        //hepatitis
        const hepatitis_radio = document.querySelectorAll('input[name="hepatitis"]');
        const hepatitis_descp = document.querySelector('#hepatitis_descp');
        let hepatitis_value = '';
        hepatitis_descp.style.display = 'none';

        if (hepatitis_radio[0].checked) {
        hepatitis_descp.style.display = 'block';
        hepatitis_value = hepatitis_descp.value;
        } else if (hepatitis_radio[1].checked) {
        hepatitis_descp.style.display = 'none';
        hepatitis_descp.value = '';
        }

        hepatitis_radio.forEach(button => {
        button.addEventListener('click', () => {
        if (button.value === '1') {
        hepatitis_descp.style.display = 'block';
        hepatitis_descp.value = hepatitis_value;
        } else {
        hepatitis_descp.style.display = 'none';
        hepatitis_value = hepatitis_descp.value;
        hepatitis_descp.value = '';
        }
        });
        });

        //diabetes
        const diabetes_radio = document.querySelectorAll('input[name="diabetes"]');
        const diabetes_descp = document.querySelector('#diabetes_descp');
        let diabetes_value = '';
        diabetes_descp.style.display = 'none';

        if (diabetes_radio[0].checked) {
        diabetes_descp.style.display = 'block';
        diabetes_value = diabetes_descp.value;
        } else if (diabetes_radio[1].checked) {
        diabetes_descp.style.display = 'none';
        diabetes_descp.value = '';
        }

        diabetes_radio.forEach(button => {
        button.addEventListener('click', () => {
        if (button.value === '1') {
        diabetes_descp.style.display = 'block';
        diabetes_descp.value = diabetes_value;
        } else {
        diabetes_descp.style.display = 'none';
        diabetes_value = diabetes_descp.value;
        diabetes_descp.value = '';
        }
        });
        });

        // sifilis
        const sifilis_radio = document.querySelectorAll('input[name="sifilis"]');
        const sifilis_descp = document.querySelector('#sifilis_descp');
        let sifilis_value = '';
        sifilis_descp.style.display = 'none';

        if(sifilis_radio[0].checked){
        sifilis_descp.style.display = 'block';
        sifilis_value = sifilis_descp.value;
        } else if (sifilis_radio[1].checked){
        sifilis_descp.style.display = 'none';
        sifilis_descp.value = '';
        }

        sifilis_radio.forEach(button => {
        button.addEventListener('click', () => {
        if (button.value === '1') {
        sifilis_descp.style.display = 'block';
        sifilis_descp.value = sifilis_value;
        } else {
        sifilis_descp.style.display = 'none';
        sifilis_value = sifilis_descp.value;
        sifilis_descp.value = '';
        }
        });
        });

        // desmayos
        const desmayos_radio = document.querySelectorAll('input[name="desmayos"]');
        const desmayos_descp = document.querySelector('#desmayos_descp');
        let desmayos_value = '';
        desmayos_descp.style.display = 'none';

        if(desmayos_radio[0].checked){
        desmayos_descp.style.display = 'block';
        desmayos_value = desmayos_descp.value;
        } else if (desmayos_radio[1].checked){
        desmayos_descp.style.display = 'none';
        desmayos_descp.value = '';
        }

        desmayos_radio.forEach(button => {
        button.addEventListener('click', () => {
        if (button.value === '1') {
        desmayos_descp.style.display = 'block';
        desmayos_descp.value = desmayos_value;
        } else {
        desmayos_descp.style.display = 'none';
        desmayos_value = desmayos_descp.value;
        desmayos_descp.value = '';
        }
        });
        });

        // sangrado
        const sangra_mucho_radio = document.querySelectorAll('input[name="sangra_mucho"]');
        const sangra_mucho_descp = document.querySelector('#sangra_mucho_descp');
        let sangra_mucho_value = '';
        sangra_mucho_descp.style.display = 'none';

        if(sangra_mucho_radio[0].checked){
        sangra_mucho_descp.style.display = 'block';
        sangra_mucho_value = sangra_mucho_descp.value;
        } else if (sangra_mucho_radio[1].checked){
        sangra_mucho_descp.style.display = 'none';
        sangra_mucho_descp.value = '';
        }

        sangra_mucho_radio.forEach(button => {
        button.addEventListener('click', () => {
        if (button.value === '1') {
        sangra_mucho_descp.style.display = 'block';
        sangra_mucho_descp.value = sangra_mucho_value;
        } else {
        sangra_mucho_descp.style.display = 'none';
        sangra_mucho_value = sangra_mucho_descp.value;
        sangra_mucho_descp.value = '';
        }
        });
        });

        //cicatrizar
        const cicatrizar_heridas_radio = document.querySelectorAll('input[name="cicatrizar_heridas"]' );
        const cicatrizar_heridas_descp = document.querySelector('#cicatrizar_heridas_descp');
        let cicatrizar_value_='';
        cicatrizar_heridas_descp.style.display = 'none';

        if(cicatrizar_heridas_radio[0].checked){
        cicatrizar_heridas_descp.style.display = 'block';
        cicatrizar_value_ = cicatrizar_heridas_descp.value;
        } else if (cicatrizar_heridas_radio[1].checked){
        cicatrizar_heridas_descp.style.display = 'none';
        cicatrizar_heridas_descp.value = '';
        }

        cicatrizar_heridas_radio.forEach(button => {
        button.addEventListener('click', () => {
        if (button.value === '1') {
        cicatrizar_heridas_descp.style.display = 'block';
        cicatrizar_heridas_descp.value = cicatrizar_value_;
        } else {
        cicatrizar_heridas_descp.style.display = 'none';
        cicatrizar_value_ = cicatrizar_heridas_descp.value;
        cicatrizar_heridas_descp.value = '';
        }
        });
        });

        //sida
        const sida_descp = document.querySelector('#sida_descp');
        const sida_radio = document.querySelectorAll('input[name="sida"]');

        let sida_value = '';
        sida_descp.style.display = 'none';

        if (sida_radio[0].checked) {
        sida_descp.style.display = 'block';
        sida_value = sida_descp.value;
        } else if (sida_radio[1].checked) {
        sida_descp.style.display = 'none';
        sida_descp.value = '';
        }

        sida_radio.forEach(button => {
        button.addEventListener('click', () => {
        if (button.value === '1') {
        sida_descp.style.display = 'block';
        sida_descp.value = sida_value;
        } else {
        sida_descp.style.display = 'none';
        sida_value = sida_descp.value;
        sida_descp.value = '';
        }
        });
        });

        }
</script>