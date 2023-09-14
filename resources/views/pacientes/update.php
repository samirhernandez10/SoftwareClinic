
public function update(Request $request, $id)
{
    // Valida los datos del formulario
    $request->validate([
        'id_tipo_identificacion' => 'required',
        'no_documento' => 'required|unique:ingreso_paciente,no_documento,' . $id
