<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientFormRequest;
use App\Models\Pago;
use App\Models\Patient;
use App\Models\Tratamiento;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{

 public function index(Request $request)
 {
  $sort   = $request->input('sort', 'id');
  $order  = $request->input('order', 'asc');
  $search = $request->input('search');

  $patients = Patient::where('user_id', auth()->user()->id)
   ->when($search, function ($query, $search) {
    return $query->where('nombre', 'like', "%{$search}%")
     ->orWhere('cedula', 'like', "%{$search}%")
     ->orWhere('telefono', 'like', "%{$search}%");
   })

   ->orderBy($sort, $order)
   ->paginate(5);
  $deudas = array();
  foreach ($patients as $patient) {

   $deuda = 0;

   foreach ($patient->tratamientos as $tratamiento) {
    $ultimo_pago = $tratamiento->pagos()->latest()->first();
    if ($ultimo_pago) {
     $deuda += $ultimo_pago->saldo_pendiente;
    } else {
     $deuda += $tratamiento->costo;
    }

   }
   $deudas[$patient->id] = $deuda;
  }
  $page = $patients->currentPage();

  return view('patient.index', compact('patients', 'deudas', 'sort', 'order', 'page'));
 }

 public function pdf()
 {

  $user         = Auth::user();
  $patients     = $user->patients;
  $tratamientos = Tratamiento::all();
  $pagos        = Pago::all();

  $pdf = Pdf::loadView('patient.pdf', compact('patients', 'tratamientos', 'pagos'));
  return $pdf->setPaper('letter', 'portrait')->stream('Pacientes.pdf');

  return view('patient.pdf');
 }

 public function pdfPaciente($id)
 {
  $user      = Auth::user();
  $pacientes = $user->patients;

  $paciente     = Patient::find($id);
  $tratamientos = Tratamiento::all();
  $pagos        = Pago::all();

  //saber que numero de paciente es de este usuario sin inportar el id
  $num = 0;
  foreach ($pacientes as $paciente2) {
   $num++;
   if ($paciente2->id == $paciente->id) {
    break;
   }
  }

  $pdf = Pdf::loadView('patient.pdf2', compact('paciente', 'tratamientos', 'pagos', 'num'));
  return $pdf->setPaper('letter', 'portrait')->stream('Pacientes.pdf');

  return view('patient.pdf2');

 }

 public function create()
 {
  return view('patient.create');
 }

 public function store(PatientFormRequest $request)
 {
  $data = $request->validated();

  /*$patient          = Patient::create($data);
  $patient->user_id = auth()->user()->id;*/
  $patient = Patient::create([
   'user_id'                     => auth()->user()->id, // 'user_id'   => '1
   'nombre' => $data['nombre'],
   'lugar_nacimiento'            => $data['lugar_nacimiento'],
   'fecha_nacimiento'            => $data['fecha_nacimiento'],
   'ocupacion'                   => $data['ocupacion'],
   'sexo'                        => $data['sexo'],
   'cedula'                      => $data['cedula'],
   'estado_civil'                => $data['estado_civil'],
   'telefono'                    => $data['telefono'],
   'direccion'                   => $data['direccion'],
   'nombre_contacto'             => $data['nombre_contacto'],
   'telefono_contacto'           => $data['telefono_contacto'],
   'nombre_telefono_doctor'      => $data['nombre_telefono_doctor'],
   'tratamiento_medico'          => $data['tratamiento_medico'],
   'tratamiento_medico_descp'    => $data['tratamiento_medico_descp'],
   'alergias'                    => $data['alergias'],
   'alergias_descp'              => $data['alergias_descp'],
   'medicamentos_que_toma'       => $data['medicamentos_que_toma'],
   'medicamentos_que_toma_descp' => $data['medicamentos_que_toma_descp'],
   'antibioticos'                => $data['antibioticos'],
   'antibioticos_descp'          => $data['antibioticos_descp'],
   'enfermo_del_corazon'         => $data['enfermo_del_corazon'],
   'enfermo_del_corazon_descp'   => $data['enfermo_del_corazon_descp'],
   'hepatitis'                   => $data['hepatitis'],
   'hepatitis_descp'             => $data['hepatitis_descp'],
   'diabetes'                    => $data['diabetes'],
   'diabetes_descp'              => $data['diabetes_descp'],
   'sifilis'                     => $data['sifilis'],
   'sifilis_descp'               => $data['sifilis_descp'],
   'desmayos'                    => $data['desmayos'],
   'desmayos_descp'              => $data['desmayos_descp'],
   'sangra_mucho'                => $data['sangra_mucho'],
   'sangra_mucho_descp'          => $data['sangra_mucho_descp'],
   'cicatrizar_heridas'          => $data['cicatrizar_heridas'],
   'cicatrizar_heridas_descp'    => $data['cicatrizar_heridas_descp'],
   'sida'                        => $data['sida'],
   'sida_descp'                  => $data['sida_descp'],
   'comentarios'                 => $data['comentarios'],

  ]);
  return redirect('/pacientes')->with('success', 'Paciente registrado');

 }

 public function show($id)
 {

  // Busca el paciente en la base de datos
  $patient = Patient::find($id);
  //deudas totales de todos los tratamientos del paciente

  // Si el paciente no existe, retorna un error 404
  if (!$patient) {
   return response()->json(['error' => 'El paciente no existe'], 404);
  }

  // Si el paciente existe, retorna la vista para mostrar los detalles del paciente

  return view('patient.show', ['patient' => $patient]);
 }
}