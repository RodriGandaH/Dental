<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientFormRequest;
use App\Models\Patient;

class PatientController extends Controller
{
 public function create()
 {
  return view('patient.create');
 }

 public function store(PatientFormRequest $request)
 {
  $data = $request->validated();

  $patient = Patient::create($data);
  /*  $patient = Patient::create([
  'name'      => $data['name'],
  'birthdate' => $data['birthdate'],
  'ci'        => $data['ci'],
  'phone'     => $data['phone'],
  'address'   => $data['address'],
  ]); */

  return redirect('/nuevo-paciente')->with('message', 'Paciente creado correctamente');

 }
}