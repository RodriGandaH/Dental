<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pacientes</title>
</head>

<style>
    body {
        font-family: sans-serif
    }



    .numero {
        margin-left: 90%;
    }

    .titulo,
    h3 {
        text-align: center;
    }

    .p-inicio {
        font-size: 14px;
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
        font-size: 14px;
    }

    p {
        font-size: 14px;
    }

    .page-break {
        page-break-after: always;
    }
</style>

<body>
    <div class="contenedor-cabezera">
        {{-- <img src="{{ public_path('/public/img/diente_feliz.jpg') }}" alt="Logo"> --}}



        <span class="numero">Nro. </span>
    </div>
    <h2 class="titulo">HISTORIA CLINICA ODONTOLOGICA</h2>
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
                    <td colspan="3"
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Nombre y apellidos:</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Lugar y fecha de nacimiento:</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Ocupación:</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Sexo:</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Diercción:</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Estado civil:</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Teléfono:</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">En caso de emergencia nombre a una persona con la cual podemos
                            comunicarnos:</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Nombres y apellidos:</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Teléfono:</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Nombre y teléfono de su médico:</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <span class="titulo-tablas">Respuestas de SI o No a cada pregunta:</span>
        <table
            style="width: 100%; border-top: 1px solid black; border-bottom: 1px solid black; border-collapse: collapse;">
            <tbody>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px; width: 50%;">
                        <span class="titulo-tablas">¿Esta usted en tratamiento médico?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;width: 5%;">
                        <span class="titulo-tablas"></span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Obs:</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px; width: 50%;">
                        <span class="titulo-tablas">¿Tiene usted algun tipo de alergia?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;width: 5%;">
                        <span class="titulo-tablas"></span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Obs:</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px; width: 50%;">
                        <span class="titulo-tablas">¿Toma usted algun tipo de medicamento?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;width: 5%;">
                        <span class="titulo-tablas"></span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Obs:</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px; width: 50%;">
                        <span class="titulo-tablas">¿Ya tomó alguna vez antibioticos?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;width: 5%;">
                        <span class="titulo-tablas"></span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Obs:</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px; width: 50%;">
                        <span class="titulo-tablas">¿Esta enfermo del corazón?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;width: 5%;">
                        <span class="titulo-tablas"></span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Obs:</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px; width: 50%;">
                        <span class="titulo-tablas">¿Tiene usted hepatitis?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;width: 5%;">
                        <span class="titulo-tablas"></span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Obs:</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px; width: 50%;">
                        <span class="titulo-tablas">¿Tiene usted diabetes?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;width: 5%;">
                        <span class="titulo-tablas"></span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Obs:</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px; width: 50%;">
                        <span class="titulo-tablas">¿Tiene o tuvo sífilis?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;width: 5%;">
                        <span class="titulo-tablas"></span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Obs:</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px; width: 50%;">
                        <span class="titulo-tablas">¿Tiene desmayos con frecuencia?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;width: 5%;">
                        <span class="titulo-tablas"></span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Obs:</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px; width: 50%;">
                        <span class="titulo-tablas">¿Sangra usted mucho cuando se corta o extraen un diente?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;width: 5%;">
                        <span class="titulo-tablas"></span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Obs:</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px; width: 50%;">
                        <span class="titulo-tablas">¿Tarda mucho tiempo en cicatrizar sus heridas?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;width: 5%;">
                        <span class="titulo-tablas"></span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Obs:</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px; width: 50%;">
                        <span class="titulo-tablas">¿Tiene usted SIDA?</span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;width: 5%;">
                        <span class="titulo-tablas"></span>
                    </td>
                    <td
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px;">
                        <span class="titulo-tablas">Obs:</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"
                        style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; padding: 3px; width: 50%;">
                        <span class="titulo-tablas">Comentarios</span>
                    </td>

                </tr>

            </tbody>
        </table>
        <p style="margin-left:15px;">Todas las informaciones declaradas respecto a mi salud son verdaderas y de mi
            entera
            responsabilidad.</p>

        <p style="margin-left:15px;">Cochabamba <span> </span> de <span> </span> del <span></span></p>

        <div class="firma">
            <span>............................................</span>
            <p>Firma del paciente o resposable</p>
        </div>


    </div>
    <div class="page-break"></div>
    <h3>Odontograma</h3>
</body>

</html>