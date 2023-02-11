<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$paciente->nombre}}</title>
</head>

<style>
    html {
        margin-top: 10px;
    }

    body {
        font-family: Verdana, Geneva, Tahoma, sans-serif
    }

    .odontograma {
        margin-left: 13px;
    }

    .numero {
        margin-left: 45%;
    }

    .titulo,
    h3 {
        text-align: center;
    }

    .p-inicio {
        font-size: 13px;
        margin-left: 20px;
        margin-right: 20px;
    }

    .datos {
        text-align: center;
        font-size: 14px;
    }


    .firma {
        text-align: right;
        margin-right: 10px;
    }

    .titulo-tablas {
        font-size: 13px;
    }

    p {
        font-size: 13px;
    }

    span {
        font-size: 13px;
    }

    .page-break {
        page-break-after: always;
    }

    .logo-texto {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: bold;
    }

    .titulo-tablas {
        font-size: 13px;
    }
</style>

<body>


    <table style="width: 100%;">
        <tbody>
            <tr>
                <td>
                    <img src="assets/diente_feliz.jpg" alt="Logo" width="80px" style="margin-rigth:20px;">
                </td>
                <td>
                    <p class="logo-texto" style="margin:0">CONSULTORIO</p>
                    <p class="logo-texto" style="margin:0">DENTAL</p>
                    <p class="logo-texto" style="margin:0">MAIGUA</p>
                </td>
                <td class=" numero-columna">
                    <div style="display: inline-block; margin-left:380px;">
                        <span class="numero">Nro:</span>
                    </div>
                    <div
                        style="display: inline-block; border: 1px solid black; border-radius: 2px; padding: 0 5px; width:70px; margin-left:10px;text-align:center;">
                        <span>{{$num}}</span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <h2 class="titulo" style="margin:0;">HISTORIA CLINICA ODONTOLOGICA</h2>
    <div style="border: 1px solid black; border-radius: 10px; padding-left: 0px; padding-rigth:0px">
        <p class="p-inicio">El presente cuestionario tiene la finalidad de ayudar a que tu odontólogo conozca aspectos
            relativos a tu
            salud,
            los cuales pueden influir en el buen resultado de tu tratamiento, ES CONFIDENCIAL.</p>
        <h3 class="datos">DATOS PERSONALES</h3>
        <table
            style="width: 100%; border-top: 1px solid black; border-bottom: 1px solid black; border-collapse: collapse;">
            <tbody>
                <tr>
                    <td colspan="2"
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"> <b>Nombre y apellidos:</b> {{$paciente->nombre}}</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"> <b>CI:</b> {{$paciente->cedula}}</span>
                    </td>
                </tr>

                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"><b>Lugar y fecha de
                                nacimiento:</b>{{$paciente->lugar_nacimiento}} - {{date('d/m/Y',
                            strtotime($paciente->fecha_nacimiento))}}</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"><b>Ocupación:</b>{{$paciente->ocupacion}}</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        @if ($paciente->sexo=='M')
                        <span class="titulo-tablas"><b>Sexo:</b>Masculino</span>
                        @else
                        <span class="titulo-tablas"><b>Sexo:</b>Femenino</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"><b>Dirección:</b>{{$paciente->direccion}}</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"><b>Estado civil:</b>{{$paciente->estado_civil}}</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"><b>Telf:</b>{{$paciente->telefono}}</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"><b>En caso de emergencia nombre a una persona con la cual podemos
                                comunicarnos</b> </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"> <b>Nombres y apellidos:</b>{{$paciente->nombre_contacto}}</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"><b>Telf:</b>{{$paciente->telefono_contacto}}</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"> <b>Nombre y teléfono de su
                                médico:</b>{{$paciente->nombre_telefono_doctor}}</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <span class="titulo-tablas"><b>Respuestas de SI o No a cada pregunta:</b> </span>
        <table
            style="width: 100%; border-top: 1px solid black; border-bottom: 1px solid black; border-collapse: collapse;">
            <tbody>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; width: 50%;">
                        <span class="titulo-tablas">¿Esta usted en tratamiento médico?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;width: 5%; text-align:center;">
                        @if ($paciente->tratamiento_medico==1)
                        <span class="titulo-tablas">SI</span>
                        @else
                        <span class="titulo-tablas">NO</span>
                        @endif

                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"><b>Obs:</b>{{$paciente->tratamiento_medico_descp}}</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; width: 50%;">
                        <span class="titulo-tablas">¿Tiene usted algun tipo de alergia?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;width: 5%; text-align:center;">
                        @if ($paciente->alergias==1)
                        <span class="titulo-tablas">SI</span>
                        @else
                        <span class="titulo-tablas">NO</span>
                        @endif
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"><b>Obs:</b>{{$paciente->alergias_descp}}</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; width: 50%;">
                        <span class="titulo-tablas">¿Toma usted algun tipo de medicamento?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;width: 5%; text-align:center;">
                        @if ($paciente->medicamentos_que_toma==1)
                        <span class="titulo-tablas">SI</span>
                        @else
                        <span class="titulo-tablas">NO</span>
                        @endif
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"><b>Obs:</b>{{$paciente->medicamentos_que_toma_descp}}</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; width: 50%;">
                        <span class="titulo-tablas">¿Ya tomó alguna vez antibioticos?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;width: 5%; text-align:center;">
                        @if ($paciente->antibioticos==1)
                        <span class="titulo-tablas">SI</span>
                        @else
                        <span class="titulo-tablas">NO</span>
                        @endif
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"><b>Obs:</b>{{$paciente->antiobioticos_descp}}</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; width: 50%;">
                        <span class="titulo-tablas">¿Esta enfermo del corazón?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;width: 5%; text-align:center;">
                        @if ($paciente->enfermo_del_corazon==1)
                        <span class="titulo-tablas">SI</span>
                        @else
                        <span class="titulo-tablas">NO</span>
                        @endif
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"><b>Obs:</b>{{$paciente->enfermo_del_corazon_descp}}</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; width: 50%;">
                        <span class="titulo-tablas">¿Tiene usted hepatitis?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;width: 5%; text-align:center;">
                        @if ($paciente->hepatitis==1)
                        <span class="titulo-tablas">SI</span>
                        @else
                        <span class="titulo-tablas">NO</span>
                        @endif
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"><b>Obs:</b>{{$paciente->hepatitis_descp}}</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; width: 50%;">
                        <span class="titulo-tablas">¿Tiene usted diabetes?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;width: 5%; text-align:center;">
                        @if ($paciente->diabetes==1)
                        <span class="titulo-tablas">SI</span>
                        @else
                        <span class="titulo-tablas">NO</span>
                        @endif
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"><b>Obs:</b>{{$paciente->diabetes_descp}}</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; width: 50%;">
                        <span class="titulo-tablas">¿Tiene o tuvo sífilis?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;width: 5%; text-align:center;">
                        @if ($paciente->sifilis==1)
                        <span class="titulo-tablas">SI</span>
                        @else
                        <span class="titulo-tablas">NO</span>
                        @endif
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"><b>Obs:</b>{{$paciente->sifilis_descp}}</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; width: 50%;">
                        <span class="titulo-tablas">¿Tiene desmayos con frecuencia?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;width: 5%; text-align:center;">
                        @if ($paciente->desmayos==1)
                        <span class="titulo-tablas">SI</span>
                        @else
                        <span class="titulo-tablas">NO</span>
                        @endif
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"><b>Obs:</b>{{$paciente->desmayos_descp}}</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; width: 50%;">
                        <span class="titulo-tablas">¿Sangra usted mucho cuando se corta o extraen un diente?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;width: 5%; text-align:center;">
                        @if ($paciente->sangra_mucho==1)
                        <span class="titulo-tablas">SI</span>
                        @else
                        <span class="titulo-tablas">NO</span>
                        @endif
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"><b>Obs:</b>{{$paciente->sangra_mucho_descp}}</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; width: 50%;">
                        <span class="titulo-tablas">¿Tarda mucho tiempo en cicatrizar sus heridas?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;width: 5%; text-align:center;">
                        @if ($paciente->cicatrizar_heridas==1)
                        <span class="titulo-tablas">SI</span>
                        @else
                        <span class="titulo-tablas">NO</span>
                        @endif
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"><b>Obs:</b>{{$paciente->cicatrizar_heridas_descp}}</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; width: 50%;">
                        <span class="titulo-tablas">¿Tiene usted SIDA?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;width: 5%; text-align:center;">
                        @if ($paciente->sida==1)
                        <span class="titulo-tablas">SI</span>
                        @else
                        <span class="titulo-tablas">NO</span>
                        @endif
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px;">
                        <span class="titulo-tablas"><b>Obs:</b>{{$paciente->sida_descp}}</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; width: 50%;">
                        <span class="titulo-tablas"><b>Comentarios:</b>{{$paciente->comentarios}}</span>
                    </td>
                </tr>

            </tbody>
        </table>
        <p style="margin-left:15px;">Todas las informaciones declaradas respecto a mi salud son verdaderas y de mi
            entera
            responsabilidad.</p>
        @php
        $month_number = $paciente->created_at->month;
        $month_array = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
        'Octubre',
        'Noviembre', 'Diciembre'];
        $month = $month_array[$month_number - 1];
        @endphp
        <p style="margin-left:15px;">Cochabamba <span>{{$paciente->created_at->day}}</span> de <span>{{$month}} </span>
            del <span>{{$paciente->created_at->year}}</span>
        </p>

        <div class="firma">
            <span>............................................</span>
            <p>Firma del paciente o resposable</p>
        </div>


    </div>
    <div class="page-break"></div>
    <h3>Odontograma</h3>
    <div class="odontograma">
        <img src="assets/odontograma.png" alt="odontograma" width="700">
    </div>
    <div>





        <table
            style="width: 100%; border-top: 1px solid black; border-bottom: 1px solid black; border-collapse: collapse;">
            <tbody>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; text-align:center; width:3%;">
                        <span> <b>N°</b> </span>

                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; text-align:center; width:10%;">
                        <span class="titulo-tablas"><b>DIENTE</b></span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; text-align:center; width:10%;">
                        <span class="titulo-tablas"><b>DIAGNOSTICO</b></span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; text-align:center;width:3%;">
                        <span class="titulo-tablas"> <b>Rx</b> </span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; text-align:center;width:10%;">
                        <span class="titulo-tablas"> <b>TRATAMIENTO</b> </span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; text-align:center;width:6%;">
                        <span class="titulo-tablas"><b>COSTO</b> </span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; text-align:center;width:12%;">
                        <span class="titulo-tablas"><b>FECHA INICIO</b></span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; text-align:center; width:5%;">
                        <span class="titulo-tablas"> <b>FECHA CONCLUSIÓN</b> </span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; text-align:center;width:10%;">
                        <span class="titulo-tablas"><b>OBSERVACIONES</b> </span>
                    </td>
                </tr>
                @if($paciente->tratamientos->count()>0)
                @foreach ($paciente->tratamientos as $key => $tratamiento )
                @if ($paciente->id==$tratamiento->patient_id)
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; text-align:center;">
                        <span>{{$key+1}}</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; text-align:center;">
                        <span>{{$tratamiento->diente}}</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; text-align:center;">
                        <span>{{$tratamiento->diagnostico}}</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; text-align:center;">
                        @if ($tratamiento->rx==1)
                        <span>SI</span>
                        @else
                        <span>NO</span>
                        @endif

                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; text-align:center;">
                        <span> {{$tratamiento->tratamiento}} </span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; text-align:center;">
                        <span>{{ number_format($tratamiento->costo, 0) }}</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; text-align:center;">
                        <span>{{date('d/m/Y',
                            strtotime($tratamiento->fecha_inicio))}}</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; text-align:center;">
                        <span> {{date('d/m/Y',
                            strtotime($tratamiento->fecha_fin))}}</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; text-align:center;">
                        @if ($tratamiento->estado ==1)
                        <span>{{$tratamiento->observaciones}} - <b>Finalizado</b></span>
                        @else
                        <span>{{$tratamiento->observaciones}} - <b>En curso</b></span>
                        @endif



                    </td>
                </tr>
                @endif
                @endforeach
                @php
                $total_costo=0;
                foreach($tratamientos as $tratamiento){
                if($paciente->id==$tratamiento->patient_id){
                $total_costo+=$tratamiento->costo;
                }
                }
                @endphp
                <tr>
                    <td colspan="5"
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 2px; text-align:center;">
                        <span> <b>Total</b></span>

                    </td>
                    <td colspan="4"
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding-left: 22px; ">
                        <span><b>{{$total_costo}}</b></span>
                    </td>
                </tr>
                @else
                <tr>
                    <td colspan="9" style="text-align:center; border: 1px solid black; padding: 2px;">
                        <span>No hay tratamientos</span>
                    </td>
                </tr>
                @endif

            </tbody>
        </table>
    </div>
    <div style="width:100%; margin-top:0px;">
        @foreach ($paciente->tratamientos as $key => $tratamiento)
        <div
            style="border: 1px solid black;display:inline-block;width:31.7%; margin-top:10px; margin-left:5px;border-radius: 3px; vertical-align: top;">
            <p style="text-align:center;margin:0;padding:0;">Tratamiento {{$key+1}}</p>
            <table
                style="width: 100%; border-top: 1px solid black; border-bottom: 1px solid black; border-collapse: collapse;">
                <tbody>
                    <tr>
                        <td style="border: 1px solid black;width:100%; text-align:center;"><span><b>Fecha</b></span>
                        </td>
                        <td style="border: 1px solid black;width:100%; text-align:center;"><span><b>A cuenta</b></span>
                        </td>
                        <td style="border: 1px solid black;width:100%; text-align:center;">
                            <span><b>Saldo</b></span>
                        </td>
                    </tr>
                    @php
                    $total = 0;
                    $saldo=$tratamiento->costo;
                    @endphp
                    @foreach ($pagos as $pago )
                    @if($pago->patient_id == $paciente->id && $pago->tratamiento_id == $tratamiento->id)
                    <tr style="text-align: center;">
                        <td style="border: 1px solid black;width:100%;"> <span>{{date('d/m/Y',
                                strtotime($pago->fecha_pago))}}</span> </td>
                        <td style="border: 1px solid black;width:100%;"> <span>{{ number_format($pago->abono, 0)
                                }}</span></td>
                        <td style="border: 1px solid black;width:100%;"> <span>{{ number_format($pago->saldo_pendiente,
                                0) }}</span></td>
                    </tr>
                    @php
                    $total += $pago->abono;
                    $saldo=$saldo - $pago->abono ;
                    @endphp
                    @endif
                    @endforeach
                    @if(count($tratamiento->pagos) > 0)
                    <tr style="text-align: center;">
                        <td style="border: 1px solid black;width:100%; ">
                            <span> <b>Total</b> </span>
                        </td>
                        <td style="border: 1px solid black;width:100%;">
                            <span> <b>{{$total}}</b></span>
                        </td>
                        @if($saldo>0)
                        <td style="width:100%;">

                        </td>
                        @else
                        <td style="border: 1px solid black;width:100%; ">
                            <span> <b>Cancelado</b> </span>
                        </td>
                        @endif

                    </tr>
                    @endif
                    @if(count($tratamiento->pagos) == 0)
                    <tr>
                        <td style="border: 1px solid black;width:100%; text-align:center;" colspan="3">
                            <span>Aún no se hizo ningún pago para este tratamiento</span>
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
        @endforeach
    </div>
    <div class="page-break"></div>

    {{-- @if ($i>=33 && $i<=36) @else @endif --}} </body>

</html>