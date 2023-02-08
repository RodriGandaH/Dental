<x-app-layout>

    <x-slot name="header">

        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ $patient->nombre }}
        </h2>

    </x-slot>

    <div class="py-3">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">


                <a class="inline-flex items-center px-4 py-2  bg-gray-800 border
                                                border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-600
                                               focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
                                                duration-150" type="button"
                    href="{{ route('tratamiento.index', ['patient' => $patient->id]) }}">Tratamientos</a>



                <h2 class="text-xl font-semibold text-gray-900 text-center">Datos personales</h2>
                <br>
                {{-- <div class="grid md:grid-cols-2 sm:grid-cols-1  gap-4"> --}}

                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2">
                        <div class="md:col-span-3 sm:col-span-1">
                            <span class="text-gray-900 font-semibold">Nombre completo</span> <br><span
                                class="text-gray-900 "> {{$patient->nombre}}</span>
                        </div>
                        <div class="md:col-span-3 sm:col-span-1">
                            <span class="text-gray-900 font-semibold">Lugar de nacimiento</span> <br><span
                                class="text-gray-900 "> {{$patient->lugar_nacimiento}} </span>
                        </div>
                        <div class="md:col-span-2 sm:col-span-1">
                            <span class="text-gray-900 font-semibold">Fecha de Nac. </span> <br> <span
                                class="text-gray-900">{{ date('d/m/Y', strtotime($patient->fecha_nacimiento)) }} </span>
                        </div>
                        <div class="md:col-span-1 sm:col-span-1">
                            <span class="text-gray-900 font-semibold">Edad </span> <br>
                            <span class="text-gray-900">
                                {{ Carbon\Carbon::parse($patient->fecha_nacimiento)->age }}</span>

                        </div>
                        <div class="md:col-span-2 sm:col-span-1">
                            <span class="text-gray-900 font-semibold">Ocupacion </span> <br> <span
                                class="text-gray-900">{{$patient->ocupacion}} </span>
                        </div>
                        <div class="md:col-span-1 sm:col-span-1">
                            @if ($patient->sexo == 'M')
                            <span class="text-gray-900 font-semibold">Sexo </span><br> <span class="text-gray-900">
                                Masculino </span>

                            @else
                            <span class="text-gray-900 font-semibold">Sexo </span> <br> <span class="text-gray-900">
                                Femenino </span>
                            @endif

                        </div>

                    </div>
                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                        <div class="md:col-span-3 sm:col-span-1">
                            <span class="text-gray-900 font-semibold">C.I. </span> <br> <span class="text-gray-900">
                                {{$patient->cedula}} <span />
                        </div>
                        <div class="md:col-span-3 sm:col-span-1">
                            @if ($patient->estado_civil == 'S')
                            <span class="text-gray-900 font-semibold">Estado civil </span> <br> <span
                                class="text-gray-900">Soltero(a) </span>
                            @elseif($patient->estado_civil == 'C')
                            <span class="text-gray-900 font-semibold">Estado civil </span> <br> <span
                                class="text-gray-900">Casado(a)</span>
                            @elseif($patient->estado_civil == 'D')
                            <span class="text-gray-900 font-semibold">Estado civil </span> <br> <span
                                class="text-gray-900"> Divorciado(a) </span>
                            @elseif($patient->estado_civil == 'V')
                            <span class="text-gray-900 font-semibold">Estado civil </span> <br><span
                                class="text-gray-900"> Viudo(a) </span>
                            @endif

                        </div>
                        <div class="md:col-span-2 sm:col-span-1">
                            <span class="text-gray-900 font-semibold">Teléfono</span> <br> <span
                                class="text-gray-900">{{$patient->telefono}}
                            </span>

                        </div>

                        <div class="md:col-span-4 sm:col-span-1">
                            <span class="text-gray-900 font-semibold">Dirección</span> <br> <span
                                class="text-gray-900">{{$patient->direccion}}
                            </span>
                        </div>
                    </div>
                    {{--
                </div> --}}
                <hr class="h-px my-3 bg-gray-400 border-1 dark:bg-gray-800">
                <h2 class="text-xl font-semibold text-gray-900 mt-4 text-center">Contacto de emergencia</h2>
                <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                    <div class="md:col-span-3 sm:col-span-1">
                        <span class="text-gray-900 font-semibold">Nombre completo </span> <br><span
                            class="text-gray-900"> {{$patient->nombre_contacto}} </span>
                    </div>
                    <div class="md:col-span-3 sm:col-span-1">
                        <span class="text-gray-900 font-semibold">Teléfono/Celular </span> <br><span
                            class="text-gray-900"> {{$patient->telefono_contacto}}</span>
                    </div>
                    <div class="md:col-span-6 sm:col-span-1">
                        @if ($patient->nombre_telefono_doctor!=null)
                        <span class="text-gray-900 font-semibold">Nombre y telefono de su medico</span> <br><span
                            class="text-gray-900">{{$patient->nombre_telefono_doctor}}</span>
                        @else
                        <span class="text-gray-900 font-semibold">Nombre y telefono de su medico</span> <br><span
                            class="text-gray-900 font-semibold"> No especificado </span>
                        @endif

                    </div>
                </div>
                <hr class="h-px my-3 bg-gray-400 border-1">
                <h2 class="text-xl font-semibold text-gray-900 mt-4 text-center">Respuestas SI/NO</h2>
                <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                    <div class="md:col-span-3 sm:col-span-1">
                        <span class="text-gray-900 font-semibold">¿Esta en tratamiento médico ?</span> <br>
                        @if ($patient->tratamiento_medico==1)
                        <span class="text-gray-900">Si </span><br>
                        @if ($patient->tratamiento_medico_descp!=null)
                        <span class="text-gray-900">{{$patient->tratamiento_medico_descp}}</span>
                        @endif
                        @else
                        <span class="text-gray-900">No</span>
                        @endif
                    </div>
                    <div class="md:col-span-3 sm:col-span-1">
                        <span class="text-gray-900 font-semibold">¿Tiene algun tipo de alergia?</span>
                        @if ($patient->alergias==1)
                        <span class="text-gray-900">Si </span> <br>
                        @if ($patient->alergias_descp!=null)
                        <span class="text-gray-900">{{$patient->alergias_descp}}</span>
                        @endif
                        @else
                        <span class="text-gray-900">No</span>
                        @endif
                    </div>
                    <div class="md:col-span-3 sm:col-span-1">
                        <span class="text-gray-900 font-semibold">¿Toma algun tipo de medicamentos?</span></p>
                        @if ($patient->medicamentos_que_toma==1)
                        <span class="text-gray-900">Si</span> <br>
                        @if ($patient->medicamentos_que_toma_descp!=null)
                        <span class="text-gray-900"> {{$patient->medicamentos_que_toma_descp}}</span>
                        @endif
                        @else
                        <span class="text-gray-900"> No</span>
                        @endif
                    </div>
                    <div class="md:col-span-3 sm:col-span-1">
                        <span class="text-gray-900 font-semibold">¿Toma algun tipo de antibioticos?</span>
                        @if ($patient->antibioticos==1)
                        <span class="text-gray-900">Si</span> <br>
                        @if ($patient->antibioticos_descp!=null)
                        <span class="text-gray-900">{{$patient->antibioticos_descp}}</span>
                        @endif


                        @else
                        <span class="text-gray-900"> No</span>
                        @endif
                    </div>


                </div>
                <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                    <div class="md:col-span-3 sm:col-span-1">
                        <span class="text-gray-900 font-semibold">¿Esta enfermo del corazon?</span>
                        @if ($patient->enfermo_del_corazon==1)
                        <span class="text-gray-900">Si </span> <br>
                        @if ($patient->enfermo_del_corazon_descp!=null)
                        <span class="text-gray-900">{{$patient->enfermo_del_corazon_descp}}</span>
                        @endif
                        @else
                        <span class="text-gray-900"> No</span>
                        @endif
                    </div>
                    <div class="md:col-span-3 sm:col-span-1">
                        <span class="text-gray-900 font-semibold">¿Tiene hepatitis?</span></p>
                        @if ($patient->hepatitis==1)
                        <span class="text-gray-900">Si </span><br>
                        @if ($patient->hepatitis_descp!=null)
                        <span class="text-gray-900 ">{{$patient->hepatitis_descp}}</span>
                        @endif


                        @else
                        <span class="text-gray-900"> No</span>
                        @endif
                    </div>
                    <div class="md:col-span-3 sm:col-span-1">
                        <span class="text-gray-900 font-semibold">¿Tiene diabetes?</span>
                        @if ($patient->diabetes==1)
                        <span class="text-gray-900">Si</span> <br>
                        @if ($patient->diabetes_descp!=null)
                        <span class="text-gray-900">{{$patient->diabetes_descp}}</span>
                        @endif


                        @else
                        <span class="text-gray-900"> No</span>
                        @endif
                    </div>
                    <div class="md:col-span-3 sm:col-span-1">
                        <span class="text-gray-900 font-semibold">¿Tiene o tuvo sífilis?</span>
                        @if ($patient->sifilis==1)
                        <span class="text-gray-900">Si</span> <br>
                        @if ($patient->sifilis_descp!=null)
                        <span class="text-gray-900">{{$patient->sifilis_descp}}</span>
                        @endif
                        @else
                        <span class="text-gray-900"> No</span>
                        @endif
                    </div>

                </div>
                <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                    <div class="md:col-span-3 sm:col-span-1">
                        <span class="text-gray-900 font-semibold">¿Tiene desmayos con frecuencia?</span>
                        @if ($patient->desmayos==1)
                        <span class="text-gray-900">Si </span> <br>
                        @if ($patient->desmayos_descp!=null)
                        <span class="text-gray-900">{{$patient->desmayos_descp}}</span>
                        @endif
                        @else
                        <span class="text-gray-900"> No</span>
                        @endif
                    </div>
                    <div class="md:col-span-3 sm:col-span-1">
                        <span class="text-gray-900 font-semibold">¿Sangra mucho cuando se corta o extraen un
                            diente?</span>
                        @if ($patient->sangra_mucho==1)
                        <span class="text-gray-900">Si </span><br>
                        @if ($patient->sangra_mucho_descp!=null)
                        <span class="text-gray-900">{{$patient->sangra_mucho_descp}}</span>
                        @endif
                        @else
                        <span class="text-gray-900"> No</span>
                        @endif
                    </div>
                    <div class="md:col-span-3 sm:col-span-1">
                        <span class="text-gray-900">¿Tarda mucho en cicatrizar sus heridas?</span>
                        @if ($patient->cicatrizas_heridas==1)
                        <span class="text-gray-900">Si</span><br>
                        @if ($patient->cicratizar_heridas_descp!=null)
                        <span class="text-gray-900">{{$patient->cicatrizar_heridas_descp}}</span>
                        @endif
                        @else
                        <span class="text-gray-900">No</span>
                        @endif
                    </div>
                    <div class="md:col-span-3 sm:col-span-1">
                        <span class="text-gray-900">¿Tiene SIDA?</span>
                        @if ($patient->sida==1)
                        <span class="text-gray-900">Si </span><br>
                        @if ($patient->sida_descp!=null)
                        <span class="text-gray-900">{{$patient->sida_descp}}</span>
                        @endif
                        @else
                        <span class="text-gray-900"> No</span>
                        @endif
                    </div>

                </div>
                <hr class="my-3 bg-gray-400 border-1">
                <span class="text-gray-900 font-semibold">Comentarios:</span> <br>
                @if ($patient->comentarios!=null)
                <span class="text-gray-900">{{$patient->comentarios}}</span>

                @elseif ($patient->comentarios==null)
                <span class="text-gray-900">Sin comentarios</span>
                @endif




            </div>
        </div>
    </div>
</x-app-layout>