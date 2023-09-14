public function show($id)
{
    $paciente = IngresoPaciente::findOrFail($id); // Encuentra el paciente por su ID
    return view('pacientes.show', compact('paciente')); // Retorna la vista y pasa los datos
}
