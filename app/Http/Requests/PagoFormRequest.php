<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagoFormRequest extends FormRequest
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
   'costo'           => 'nullable',
   'abono'           => ['required', 'numeric'],
   'saldo_pendiente' => 'nullable',
   'fecha_pago'      => 'nullable',

  ];
 }
}