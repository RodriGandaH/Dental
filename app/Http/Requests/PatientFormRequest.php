<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientFormRequest extends FormRequest
{
 /**
  * Determine if the user is authorized to make this request.
  *
  * @return bool
  */
 public function authorize()
 {
  return true;
 }

 /**
  * Get the validation rules that apply to the request.
  *
  * @return array<string, mixed>
  */
 public function rules()
 {
  return [
   'nombre'                      => ['required', 'string', 'max:255'],
   'lugar_nacimiento'            => ['required', 'string', 'max:255'],
   'fecha_nacimiento'            => ['required', 'date'],
   'ocupacion'                   => ['required', 'string', 'max:255'],
   'sexo'                        => ['required', 'in:M,F', 'string', 'max:255'],
   'cedula'                      => ['required', 'numeric', 'max:255'],
   'estado_civil'                => ['required', 'in:S,C,D,V', 'string', 'max:255'],
   'telefono'                    => ['required', 'numeric', 'max:255'],
   'direccion'                   => ['required', 'string', 'max:255'],
   'nombre_contacto'             => ['required', 'string', 'max:255'],
   'telefono_contacto'           => ['required', 'numeric', 'max:255'],
   'nombre_telefono_doctor'      => ['string', 'max:255'],
   'tratamiento_medico'          => ['required', 'string', 'max:255'],
   'tratamiento_medico_descp'    => ['string', 'max:255', 'nullable'],
   'alergias'                    => ['required', 'string', 'max:255'],
   'alergias_descp'              => ['string', 'max:255', 'nullable'],
   'medicamentos_que_toma'       => ['required', 'string', 'max:255'],
   'medicamentos_que_toma_descp' => ['string', 'max:255', 'nullable'],
   'antibioticos'                => ['required', 'string', 'max:255'],
   'antibioticos_descp'          => ['string', 'max:255', 'nullable'],
   'enfermo_del_corazon'         => ['required', 'string', 'max:255'],
   'enfermo_del_corazon_descp'   => ['string', 'max:255', 'nullable'],
   'hepatitis'                   => ['required', 'string', 'max:255'],
   'hepatitis_descp'             => ['string', 'max:255', 'nullable'],
   'diabetes'                    => ['required', 'string', 'max:255'],
   'diabetes_descp'              => ['string', 'max:255', 'nullable'],
   'sifilis'                     => ['required', 'string', 'max:255'],
   'sifilis_descp'               => ['string', 'max:255', 'nullable'],
   'desmayos'                    => ['required', 'string', 'max:255'],
   'desmayos_descp'              => ['string', 'max:255', 'nullable'],
   'sangra_mucho'                => ['required', 'string', 'max:255'],
   'sangra_mucho_descp'          => ['string', 'max:255', 'nullable'],
   'cicatrizar_heridas'          => ['required', 'string', 'max:255'],
   'cicatrizar_heridas_descp'    => ['string', 'max:255', 'nullable'],
   'sida'                        => ['required', 'string', 'max:255'],
   'sida_descp'                  => ['string', 'max:255', 'nullable'],
   'comentarios'                 => ['string', 'max:255'],
  ];
 }
}