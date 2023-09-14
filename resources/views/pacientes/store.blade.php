public function store(Request $request)
{
    $request->validate([
        'id_tipo_identificacion' => 'required',
        'no_documento' => 'required|unique:ingreso_paciente',
        // Agrega aquí el resto de las validaciones para cada campo
    ]);

    $paciente = new IngresoPaciente($request->all());
    $paciente->save();

    return redirect()->route('pacientes.index')->with('success', 'Paciente creado correctamente.');
}
