<?php

namespace App\Http\Controllers;
use App\Models\IngresoPaciente;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth; // Añade esta línea


class IngresoPacienteController extends Controller
{
    public function index()
{
    $header = "Software Clinico"; // Asigna un valor a la variable $header
    $pacientes = IngresoPaciente::all(); // Recupera todos los pacientes
    return view('pacientes.index', compact('pacientes', 'header')); // Retorna la vista y pasa los datos, incluida la variable $header
}
    public function create()
    {   return view('pacientes.create'); // Retorna la vista del formulario de creación

    }
public function store(Request $request)
    {
    // Valida los datos del formulario
    $request->validate([
        'id_tipo_identificacion' => 'required|integer|exists:tipo_identificacion,id',
        'no_documento' => 'required|unique:ingreso_paciente',
        'nombre1' => 'required|string|max:255',
        'nombre2' => 'nullable|string|max:255',
        'apellido1' => 'required|string|max:255',
        'apellido2' => 'required|string|max:255',
        'id_sexo' => 'required|integer|exists:id_sexo,id',
        'fecha_nac' => 'required|date',
        'edad' => 'required|integer',
        'id_tipo_edad' => 'required|integer|exists:id_tipo_edad,id',
        'id_municipio' => 'required|integer|exists:id_municipio,id',
        'id_barrio' => 'required|integer|exists:id_barrio,id',
        'direccion' => 'required|string|max:255',
        'telefono' => 'nullable|string|max:15',
        'movil' => 'required|string|max:15',
        'id_estado_civil' => 'required|integer|exists:id_estado_civil,id',
        'correo' => 'required|email|max:255',
        'grupo_sangre' => 'required|string|max:3',
        'rh' => 'nullable|string|max:1',
        'id_etnia' => 'required|integer|exists:id_etnia,id',
        'n_afiliacion' => 'nullable|string|max:255',
        'estado_eps' => 'required|boolean',
    ]);

    // Calcular la edad en días, meses y años
    $fechaNacimiento = Carbon::parse($request->fecha_nacimiento);
    $edadDias = $fechaNacimiento->diffInDays();
    $edadMeses = $fechaNacimiento->diffInMonths();
    $edadAños = $fechaNacimiento->age;

    // Guardar los datos del paciente en la base de datos
    $paciente = new Paciente;
    $paciente->id_tipo_identificacion = $request->id_tipo_identificacion;
    $paciente->no_documento = $request->no_documento;
    $paciente->nombre1 = $request->nombre1;
    $paciente->nombre2 = $request->nombre2;
    $paciente->apellido1 = $request->apellido1;
    $paciente->apellido2 = $request->apellido2;
    $paciente->genero = $request->genero;
    $paciente->eps = $request->eps;
    $paciente->correo = $request->tipoDocumento;
    $paciente->direccion = $request->direccion;
    $paciente->id_etnia = $request->id_etnia;
    $paciente->id_estado_civil = $request->id_estado_civil;
    $paciente->telefono = $request->telefono;
    $paciente->tipo_afiliado = $request->tipo_afiliado;
    $paciente->fecha_nac = $request->fecha_nac;
    
    // ... (asigna el resto de los campos del formulario)
    $paciente->edad = $edadDias;
    $paciente->edad = $edadMeses;
    $paciente->edad = $edadAños;
    $paciente->save();

    // Crea un nuevo objeto IngresoPaciente y guarda los datos en la base de datos
    $paciente = new IngresoPaciente($request->all());
    $paciente->save();
    try {
        // ... (validación, cálculo de la edad y almacenamiento en la base de datos)
    } catch (\Exception $e) {
        // Redirige a la vista deseada con un mensaje de error
        return redirect()->route('ruta_deseada')->with('error', 'Error al guardar el paciente: ' . $e->getMessage());
    }


    // Redirige al usuario a la lista de pacientes con un mensaje de éxito
    return redirect()->route('pacientes.index')->with('success', 'Paciente creado correctamente.');
    }
public function show($id)
    {
    $paciente = IngresoPaciente::findOrFail($id); // Encuentra el paciente por su ID
    return view('pacientes.show', compact('paciente')); // Retorna la vista y pasa los datos
    }
public function edit($id)
    {
    $paciente = IngresoPaciente::findOrFail($id); // Encuentra el paciente por su ID
    return view('pacientes.edit', compact('paciente')); // Retorna la vista y pasa los datos
    }
public function update(Request $request, $id)
    {
    // Encuentra el paciente por su ID
    $paciente = IngresoPaciente::findOrFail($id);

    // Valida los datos del formulario
    $request->validate([
        'id_tipo_identificacion' => 'required|integer|exists:tipo_identificacion,id',
        'no_documento' => ['required', Rule::unique('ingreso_paciente')->ignore($paciente->id)],
        'nombre1' => 'required|string|max:255',
        'nombre2' => 'nullable|string|max:255',
        'apellido1' => 'required|string|max:255',
        'apellido2' => 'required|string|max:255',
        'id_sexo' => 'required|integer|exists:id_sexo,id',
        'fecha_nac' => 'required|date',
        'edad' => 'required|integer',
        'id_tipo_edad' => 'required|integer|exists:id_tipo_edad,id',
        'id_municipio' => 'required|integer|exists:id_municipio,id',
        'id_barrio' => 'required|integer|exists:id_barrio,id',
        'direccion' => 'required|string|max:255',
        'telefono' => 'nullable|string|max:15',
        'movil' => 'required|string|max:15',
        'id_estado_civil' => 'required|integer|exists:id_estado_civil,id',
        'correo' => 'required|email|max:255',
        'grupo_sangre' => 'required|string|max:3',
        'rh' => 'nullable|string|max:1',
        'id_etnia' => 'required|integer|exists:id_etnia,id',
        'n_afiliacion' => 'nullable|string|max:255',
        'estado_eps' => 'required|boolean',
    ]);

    // Actualiza los datos en la base de datos
    $paciente->update($request->all());

    // Redirige al usuario a la lista de pacientes con un mensaje de éxito
    return redirect()->route('pacientes.index')->with('success', 'Paciente actualizado correctamente.');
    }
    
}