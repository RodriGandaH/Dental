<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientFormRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{

 public function index(Request $request)
 {
  $sort   = $request->input('sort', 'id');
  $order  = $request->input('order', 'asc');
  $search = $request->input('search');

  $patients = Patient::where('user_id', auth()->user()->id)
   ->when($search, function ($query, $search) {
    return $query->where('name', 'like', "%{$search}%")
     ->orWhere('ci', 'like', "%{$search}%")
     ->orWhere('phone', 'like', "%{$search}%");
   })
   ->orderBy($sort, $order)
   ->paginate(5);

  return view('patient.index', compact('patients', 'sort', 'order'));
 }

 public function create()
 {
  return view('patient.create');
 }

 public function store(PatientFormRequest $request)
 {
  $data = $request->validated();

  //$patient          = Patient::create($data);
  //$patient->user_id = auth()->user()->id;
  $patient = Patient::create([
   'user_id'   => auth()->user()->id, // 'user_id'   => '1
   'name' => $data['name'],
   'birthdate' => $data['birthdate'],
   'ci'        => $data['ci'],
   'phone'     => $data['phone'],
   'address'   => $data['address'],
  ]);
  return redirect('/pacientes')->with('message', 'Paciente creado correctamente');

 }

 public function show($id)
 {
  // Busca el paciente en la base de datos
  $patient = Patient::find($id);

  // Si el paciente no existe, retorna un error 404
  if (!$patient) {
   return response()->json(['error' => 'El paciente no existe'], 404);
  }

  // Si el paciente existe, retorna la vista para mostrar los detalles del paciente
  return view('patient.show', ['patient' => $patient]);
 }
}