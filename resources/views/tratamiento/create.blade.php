<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Nuevo tratamiento para ') }} <span>{{$patient->nombre}}</span>
        </h2>
    </x-slot>
    <div class="py-2">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="text-center text-xl font-bold">Odontograma</h2>
                <form action="" method="POST">
                    <h2 class="text-xl font-bold">Datos</h2>
                    <br>
                    {{-- <div class="grid md:grid-cols-2 sm:grid-cols-1  gap-4"> --}}
                        @csrf
                        <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2">
                            <div class="md:col-span-4 sm:col-span-1">
                                <x-input-label for="dientes" :value="__('Dientes')" />
                                <x-text-input id="dientes" class="block mt-1 w-full" type="text" name="dientes"
                                    :value="old('dientes')" />
                                @error('dientes')
                                <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="md:col-span-2 sm:col-span-1">
                                <x-input-label for="diagnostico" :value="__('Diagnostico')" />
                                <x-text-input id="diagnostico" class="block mt-1 w-full" type="text" name="diagnostico"
                                    :value="old('diagnostico')" />
                                @error('diagnostico')
                                <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="md:col-span-2 sm:col-span-1">
                                <x-input-label for="rx" :value="__('Rx')" />
                                <input id="rx" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                            </div>
                            <div class="md:col-span-2 sm:col-span-1">
                                <x-input-label for="tratamiento" :value="__('Tratamiento')" />
                                <x-text-input id="tratamiento" class="block mt-1 w-full" type="text" name="tratamiento"
                                    :value="old('tratamiento')" />
                                @error('tratamiento')
                                <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="md:col-span-2 sm:col-span-1">
                                <x-input-label for="costo" :value="__('Costo')" />
                                <x-text-input id="costo" class="block mt-1 w-full" type="number" name="costo"
                                    :value="old('costo')" />
                                @error('costo')
                                <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                            <div class="md:col-span-2 sm:col-span-1">
                                <x-input-label for="fecha_inicio" :value="__('Fecha inicio')" />
                                <x-text-input id="fecha_inicio" class="block mt-1 w-full" type="date"
                                    name="fecha_inicio" :value="old('fecha_inicio')" />
                                @error('fecha_inicio')
                                <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="md:col-span-2 sm:col-span-1">
                                <x-input-label for="fecha_fin" :value="__('Fecha fin')" />
                                <x-text-input id="fecha_fin" class="block mt-1 w-full" type="date" name="fecha_fin"
                                    :value="old('fecha_fin')" />

                            </div>
                            <div class="md:col-span-2 sm:col-span-1">
                                <x-input-label for="estado" :value="__('Completado')" />
                                <input id="estado" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                            </div>
                            <label for="observaciones"
                                class="block mb-2 text-sm font-medium mt-3 text-gray-900 dark:text-white">Observaciones</label>
                            <textarea id="observaciones" rows="4" name="observaciones"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Escribe las observaciones aqui..."></textarea>

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