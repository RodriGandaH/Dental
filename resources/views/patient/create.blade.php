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
                    <h2 class="text-xl font-bold">Datos personales del paciente</h2>
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
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
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
                                    <option value="S">Soltero(a)</option>
                                    <option value="C">Casado(a)</option>
                                    <option value="D">Divorciado(a)</option>
                                    <option value="V">Viudo(a)</option>
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
                    <h2 class="text-xl font-bold mt-4">Persona a la que comunicarse en caso de emergencia</h2>
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
                    <h2 class="text-xl font-bold mt-4">Responder SI o NO</h2>
                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                        <div class="md:col-span-4 sm:col-span-1">
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
                        <div class="md:col-span-4 sm:col-span-1">
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
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="md:col-span-4 sm:col-span-1">
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
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                        <div class="md:col-span-4 sm:col-span-1">
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
                        <div class="md:col-span-4 sm:col-span-1">
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
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="md:col-span-4 sm:col-span-1">
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
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                        <div class="md:col-span-4 sm:col-span-1">
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
                        <div class="md:col-span-4 sm:col-span-1">
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
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="md:col-span-4 sm:col-span-1">
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
                    </div>
                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                        <div class="md:col-span-4 sm:col-span-1">
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
                            <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="md:col-span-4 sm:col-span-1">
                            <x-input-label for="cicatrizar_heridas"
                                :value="__('Tarda mucho en cicatrizar sus heridas?')" />
                            <div class="ml-3">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="cicatrizar_heridas" value="1" class="form-radio" />
                                    <span class="ml-2">Sí</span>
                                </label>
                                <label class="inline-flex items-center ml-3">
                                    <input type="radio" name="cicatrizar_heridas" value="0" class="form-radio" />
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
                    <label for="comentarios"
                        class="block mb-2 text-sm font-medium mt-3 text-gray-900 ">Comentarios</label>
                    <textarea id="comentarios" rows="4" name="comentarios"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Escribe los message aqui..."></textarea>
                    <div class="flex justify-between">
                        <x-primary-button class="mt-3 ml-3">
                            {{ __('Guardar') }}
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

{{-- Codigo javascript --}}

<script>
    window.onload = function(){
    //Obtener los elementos del DOM
    const tratamiento_medico_radio = document.querySelectorAll('input[name="tratamiento_medico"]');
    const alergias_radio = document.querySelectorAll('input[name="alergias"]');
    const medicamentos_que_toma_radio = document.querySelectorAll('input[name="medicamentos_que_toma"]');
    const antibioticos_radio = document.querySelectorAll('input[name="antibioticos"]');
    const enfermo_del_corazon_radio = document.querySelectorAll('input[name="enfermo_del_corazon"]');
    const hepatitis_radio = document.querySelectorAll('input[name="hepatitis"]');
    const diabetes_radio = document.querySelectorAll('input[name="diabetes"]');
    const sifilis_radio = document.querySelectorAll('input[name="sifilis"]');
    const desmayos_radio = document.querySelectorAll('input[name="desmayos"]');
    const sangra_mucho_radio = document.querySelectorAll('input[name="sangra_mucho"]');
    const cicatrizar_heridas_radio = document.querySelectorAll('input[name="cicatrizar_heridas"]' );
    const sida_radio = document.querySelectorAll('input[name="sida"]');


    const tratamiento_medico_descp = document.querySelector('#tratamiento_medico_descp');
    const alergias_descp = document.querySelector('#alergias_descp');
    const medicamentos_que_toma_descp = document.querySelector('#medicamentos_que_toma_descp');
    const antibioticos_descp = document.querySelector('#antibioticos_descp');
    const enfermo_del_corazon_descp = document.querySelector('#enfermo_del_corazon_descp');
    const hepatitis_descp = document.querySelector('#hepatitis_descp');
    const diabetes_descp = document.querySelector('#diabetes_descp');
    const sifilis_descp = document.querySelector('#sifilis_descp');
    const desmayos_descp = document.querySelector('#desmayos_descp');
    const sangra_mucho_descp = document.querySelector('#sangra_mucho_descp');
    const cicatrizar_heridas_descp = document.querySelector('#cicatrizar_heridas_descp');
    const sida_descp = document.querySelector('#sida_descp');

    //Ocultar y deshabilitar el input de texto al cargar la página
    tratamiento_medico_descp.style.display = 'none';

    alergias_descp.style.display = 'none';

    medicamentos_que_toma_descp.style.display = 'none';

    antibioticos_descp.style.display = 'none';

    enfermo_del_corazon_descp.style.display = 'none';

    hepatitis_descp.style.display = 'none';

    diabetes_descp.style.display = 'none';

    sifilis_descp.style.display = 'none';

    desmayos_descp.style.display = 'none';

    sangra_mucho_descp.style.display = 'none';

    cicatrizar_heridas_descp.style.display = 'none';

    sida_descp.style.display = 'none';

    //Añadir un evento de click a cada radio button

    tratamiento_medico_radio.forEach(button => {
      button.addEventListener('click', () => {
        if (button.value === '1') {
          //Mostrar y habilitar el input de texto si se selecciona "Sí"
          tratamiento_medico_descp.style.display = 'block';
          tratamiento_medico_descp.value = '';
        } else {
          //Ocultar y deshabilitar el input de texto si se selecciona "No"
          tratamiento_medico_descp.style.display = 'none';
            tratamiento_medico_descp.value = '';
        }
      });
    });
   alergias_radio.forEach(button => {
      button.addEventListener('click', () => {
        if (button.value === '1') {
          //Mostrar y habilitar el input de texto si se selecciona "Sí"
          alergias_descp.style.display = 'block';
          alergias_descp.value = '';
        } else {
          //Ocultar y deshabilitar el input de texto si se selecciona "No"
          alergias_descp.style.display = 'none';
          alergias_descp.value = '';
        }
      });
    });
    medicamentos_que_toma_radio.forEach(button => {
      button.addEventListener('click', () => {
        if (button.value === '1') {
          //Mostrar y habilitar el input de texto si se selecciona "Sí"
          medicamentos_que_toma_descp.style.display = 'block';
            medicamentos_que_toma_descp.value = '';
        } else {
          //Ocultar y deshabilitar el input de texto si se selecciona "No"
          medicamentos_que_toma_descp.style.display = 'none';
          medicamentos_que_toma_descp.value = '';
        }
      });
    });
    antibioticos_radio.forEach(button => {
      button.addEventListener('click', () => {
        if (button.value === '1') {
          //Mostrar y habilitar el input de texto si se selecciona "Sí"
          antibioticos_descp.style.display = 'block';
            antibioticos_descp.value = '';
        } else {
          //Ocultar y deshabilitar el input de texto si se selecciona "No"
          antibioticos_descp.style.display = 'none';
          antibioticos_descp.value = '';
        }
      });
    });
    enfermo_del_corazon_radio.forEach(button => {
      button.addEventListener('click', () => {
        if (button.value === '1') {
          //Mostrar y habilitar el input de texto si se selecciona "Sí"
          enfermo_del_corazon_descp.style.display = 'block';
            enfermo_del_corazon_descp.value = '';
        } else {
          //Ocultar y deshabilitar el input de texto si se selecciona "No"
          enfermo_del_corazon_descp.style.display = 'none';
          enfermo_del_corazon_descp.value = '';
        }
      });
    });
    hepatitis_radio.forEach(button => {
      button.addEventListener('click', () => {
        if (button.value === '1') {
          //Mostrar y habilitar el input de texto si se selecciona "Sí"
          hepatitis_descp.style.display = 'block';
            hepatitis_descp.value = '';
        } else {
          //Ocultar y deshabilitar el input de texto si se selecciona "No"
          hepatitis_descp.style.display = 'none';
          hepatitis_descp.value = '';
        }
      });
    });
    diabetes_radio.forEach(button => {
      button.addEventListener('click', () => {
        if (button.value === '1') {
          //Mostrar y habilitar el input de texto si se selecciona "Sí"
          diabetes_descp.style.display = 'block';
            diabetes_descp.value = '';
        } else {
          //Ocultar y deshabilitar el input de texto si se selecciona "No"
          diabetes_descp.style.display = 'none';
          diabetes_descp.value = '';
        }
      });
    });
    sifilis_radio.forEach(button => {
      button.addEventListener('click', () => {
        if (button.value === '1') {
          //Mostrar y habilitar el input de texto si se selecciona "Sí"
          sifilis_descp.style.display = 'block';
            sifilis_descp.value = '';
        } else {
          //Ocultar y deshabilitar el input de texto si se selecciona "No"
          sifilis_descp.style.display = 'none';
          sifilis_descp.value = '';
        }
      });
    });
    desmayos_radio.forEach(button => {
      button.addEventListener('click', () => {
        if (button.value === '1') {
          //Mostrar y habilitar el input de texto si se selecciona "Sí"
          desmayos_descp.style.display = 'block';
            desmayos_descp.value = '';
        } else {
          //Ocultar y deshabilitar el input de texto si se selecciona "No"
          desmayos_descp.style.display = 'none';
          desmayos_descp.value = '';
        }
      });
    });
    sangra_mucho_radio.forEach(button => {
      button.addEventListener('click', () => {
        if (button.value === '1') {
          //Mostrar y habilitar el input de texto si se selecciona "Sí"
          sangra_mucho_descp.style.display = 'block';
            sangra_mucho_descp.value = '';
        } else {
          //Ocultar y deshabilitar el input de texto si se selecciona "No"
          sangra_mucho_descp.style.display = 'none';
          sangra_mucho_descp.value = '';
        }
      });
    });
    cicatrizar_heridas_radio.forEach(button => {
      button.addEventListener('click', () => {
        if (button.value === '1') {
          //Mostrar y habilitar el input de texto si se selecciona "Sí"
          cicatrizar_heridas_descp.style.display = 'block';
            cicatrizar_heridas_descp.value = '';
        } else {
          //Ocultar y deshabilitar el input de texto si se selecciona "No"
          cicatrizar_heridas_descp.style.display = 'none';
          cicatrizar_heridas_descp.value = '';
        }
      });
    });
    sida_radio.forEach(button => {
    button.addEventListener('click', () => {
    if (button.value === '1') {
    //Mostrar y habilitar el input de texto si se selecciona "Sí"
    sida_descp.style.display = 'block';
    sida_descp.value = '';
    } else {
    //Ocultar y deshabilitar el input de texto si se selecciona "No"
    sida_descp.style.display = 'none';
    sida_descp.value = '';
    }
    });
    });

  }
</script>