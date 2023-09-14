public function edit($id)
{
    $paciente = IngresoPaciente::findOrFail($id); // Encuentra el paciente por su ID
    return view('pacientes.edit', compact('paciente')); // Retorna la vista y pasa los datos
}
