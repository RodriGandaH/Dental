<x-app-layout>

    <x-slot name="header">

        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ $patient->nombre }}
        </h2>

    </x-slot>

    <div class="py-3">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">



                <h2 class="text-xl font-bold">Datos personales</h2>
                <br>
                {{-- <div class="grid md:grid-cols-2 sm:grid-cols-1  gap-4"> --}}

                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2">
                        <div class="md:col-span-3 sm:col-span-1">
                            <p><b>Nombre completo </b> <br> {{$patient->nombre}} </p>
                        </div>
                        <div class="md:col-span-3 sm:col-span-1">
                            <p><b>Lugar de nacimiento </b> <br> {{$patient->lugar_nacimiento}} </p>
                        </div>
                        <div class="md:col-span-2 sm:col-span-1">
                            <p><b>Fecha de Nac. </b> <br>{{ date('d/m/Y', strtotime($patient->fecha_nacimiento)) }} </p>
                        </div>
                        <div class="md:col-span-1 sm:col-span-1">
                            <p><b>Edad </b> <br>
                                {{ Carbon\Carbon::parse($patient->fecha_nacimiento)->age }}
                            </p>
                        </div>
                        <div class="md:col-span-2 sm:col-span-1">
                            <p><b>Ocupacion </b> <br> {{$patient->ocupacion}} </p>
                        </div>
                        <div class="md:col-span-1 sm:col-span-1">
                            @if ($patient->sexo == 'M')
                            <p><b>Sexo </b><br> Masculino </p>

                            @else
                            <p><b>Sexo </b> <br> Femenino </p>
                            @endif

                        </div>

                    </div>
                    <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                        <div class="md:col-span-3 sm:col-span-1">
                            <p><b>C.I. </b> <br> {{$patient->cedula}} </p>
                        </div>
                        <div class="md:col-span-3 sm:col-span-1">
                            @if ($patient->estado_civil == 'S')
                            <p><b>Estado civil </b> <br> Soltero(a) </p>
                            @elseif($patient->estado_civil == 'C')
                            <p><b>Estado civil </b> <br> Casado(a) </p>
                            @elseif($patient->estado_civil == 'D')
                            <p><b>Estado civil </b> <br> Divorciado(a) </p>
                            @elseif($patient->estado_civil == 'V')
                            <p><b>Estado civil </b> <br> Viudo(a) </p>
                            @endif

                        </div>
                        <div class="md:col-span-2 sm:col-span-1">
                            <p>
                                <b>Teléfono</b> <br> {{$patient->telefono}}
                            </p>

                        </div>

                        <div class="md:col-span-4 sm:col-span-1">
                            <p>
                                <b>Dirección</b> <br> {{$patient->direccion}}
                            </p>
                        </div>
                    </div>
                    {{--
                </div> --}}
                <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-800">
                <h2 class="text-xl font-bold mt-4">Contacto de emergencia</h2>
                <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                    <div class="md:col-span-3 sm:col-span-1">
                        <p><b>Nombre completo </b> <br> {{$patient->nombre_contacto}} </p>
                    </div>
                    <div class="md:col-span-3 sm:col-span-1">
                        <p><b>Teléfono/Celular </b> <br> {{$patient->telefono_contacto}} </p>
                    </div>
                    <div class="md:col-span-6 sm:col-span-1">
                        @if ($patient->nombre_telefono_doctor!=null)
                        <p><b>Nombre y telefono de su medico</b> <br>{{$patient->nombre_telefono_doctor}}</p>
                        @else
                        <p><b>Nombre y telefono de su medico</b> <br> No especificado </p>
                        @endif

                    </div>
                </div>
                <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-800">
                <h2 class="text-xl font-bold mt-4">Respuestas SI/NO</h2>
                <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                    <div class="md:col-span-3 sm:col-span-1">
                        <p><b>¿Esta en tratamiento médico ?</b></p>
                        @if ($patient->tratamiento_medico==1)
                        <p>Si <br>
                            @if ($patient->tratamiento_medico_descp!=null)
                        <p>{{$patient->tratamiento_medico_descp}}</p>
                        @endif

                        </p>
                        @else
                        <p> No</p>
                        @endif
                    </div>
                    <div class="md:col-span-3 sm:col-span-1">
                        <p><b>¿Tiene algun tipo de alergia?</b></p>
                        @if ($patient->alergias==1)
                        <p>Si <br>
                            @if ($patient->alergias_descp!=null)
                        <p>{{$patient->alergias_descp}}</p>
                        @endif

                        </p>
                        @else
                        <p> No</p>
                        @endif
                    </div>
                    <div class="md:col-span-3 sm:col-span-1">
                        <p><b>¿Toma algun tipo de medicamentos?</b></p>
                        @if ($patient->medicamentos_que_toma==1)
                        <p>Si <br>
                            @if ($patient->medicamentos_que_toma_descp!=null)
                        <p>{{$patient->medicamentos_que_toma_descp}}</p>
                        @endif

                        </p>
                        @else
                        <p> No</p>
                        @endif
                    </div>
                    <div class="md:col-span-3 sm:col-span-1">
                        <p><b>¿Toma algun tipo de antibioticos?</b></p>
                        @if ($patient->antibioticos==1)
                        <p>Si <br>
                            @if ($patient->antibioticos_descp!=null)
                        <p>{{$patient->antibioticos_descp}}</p>
                        @endif

                        </p>
                        @else
                        <p> No</p>
                        @endif
                    </div>


                </div>
                <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                    <div class="md:col-span-3 sm:col-span-1">
                        <p><b>¿Esta enfermo del corazon?</b></p>
                        @if ($patient->enfermo_del_corazon==1)
                        <p>Si <br>
                            @if ($patient->enfermo_del_corazon_descp!=null)
                        <p>{{$patient->enfermo_del_corazon_descp}}</p>
                        @endif

                        </p>
                        @else
                        <p> No</p>
                        @endif
                    </div>
                    <div class="md:col-span-3 sm:col-span-1">
                        <p><b>¿Tiene hepatitis?</b></p>
                        @if ($patient->hepatitis==1)
                        <p>Si <br>
                            @if ($patient->hepatitis_descp!=null)
                        <p>{{$patient->hepatitis_descp}}</p>
                        @endif

                        </p>
                        @else
                        <p> No</p>
                        @endif
                    </div>
                    <div class="md:col-span-3 sm:col-span-1">
                        <p><b>¿Tiene diabetes?</b></p>
                        @if ($patient->diabetes==1)
                        <p>Si <br>
                            @if ($patient->diabetes_descp!=null)
                        <p>{{$patient->diabetes_descp}}</p>
                        @endif

                        </p>
                        @else
                        <p> No</p>
                        @endif
                    </div>
                    <div class="md:col-span-3 sm:col-span-1">
                        <p><b>¿Tiene o tuvo sífilis?</b></p>
                        @if ($patient->sifilis==1)
                        <p>Si <br>
                            @if ($patient->sifilis_descp!=null)
                        <p>{{$patient->sifilis_descp}}</p>
                        @endif

                        </p>
                        @else
                        <p> No</p>
                        @endif
                    </div>

                </div>
                <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                    <div class="md:col-span-3 sm:col-span-1">
                        <p><b>¿Tiene desmayos con frecuencia?</b></p>
                        @if ($patient->desmayos==1)
                        <p>Si <br>
                            @if ($patient->desmayos_descp!=null)
                        <p>{{$patient->desmayos_descp}}</p>
                        @endif

                        </p>
                        @else
                        <p> No</p>
                        @endif
                    </div>
                    <div class="md:col-span-3 sm:col-span-1">
                        <p><b>¿Sangra mucho cuando se corta o extraen un diente?</b></p>
                        @if ($patient->sangra_mucho==1)
                        <p>Si <br>
                            @if ($patient->sangra_mucho_descp!=null)
                        <p>{{$patient->sangra_mucho_descp}}</p>
                        @endif

                        </p>
                        @else
                        <p> No</p>
                        @endif
                    </div>
                    <div class="md:col-span-3 sm:col-span-1">
                        <p><b>¿Tarda mucho en cicatrizar sus heridas?</b></p>
                        @if ($patient->cicatrizas_heridas==1)
                        <p>Si <br>
                            @if ($patient->cicratizar_heridas_descp!=null)
                        <p>{{$patient->cicatrizar_heridas_descp}}</p>
                        @endif

                        </p>
                        @else
                        <p> No</p>
                        @endif
                    </div>
                    <div class="md:col-span-3 sm:col-span-1">
                        <p><b>¿Tiene SIDA?</b></p>
                        @if ($patient->sida==1)
                        <p>Si <br>
                            @if ($patient->sida_descp!=null)
                        <p>{{$patient->sida_descp}}</p>
                        @endif

                        </p>
                        @else
                        <p> No</p>
                        @endif
                    </div>

                </div>
                <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-800">
                <p> <b>Comentarios:</b> <br> </p>
                @if ($patient->comentarios!=null)
                <p>{{$patient->comentarios}}</p>

                @elseif ($patient->comentarios==null)
                <p>Sin comentarios</p>
                @endif



                <div class="flex justify-end">

                    <a class="inline-flex items-center px-4 py-2  bg-gray-800 border
                                border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-gray-600
                               focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
                                duration-150" type="button"
                        href="{{ route('tratamiento.index', ['patient' => $patient->id]) }}">Tratamientos</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>