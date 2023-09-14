<?php

namespace App\Http\Controllers;


use App\Models\TipoIdentificacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\User;

class TipoIdentificacionController extends Controller
{
      public function index()
{
    $tipos_identificacion = TipoIdentificacion::all();
    return view('tipos_identificacion.index', compact('tipos_identificacion'));
}

    public function create()
    {
        $users = User::all();
        $currentUserId = auth()->user() ? auth()->user()->id : null;
        return view('tipos_identificacion.create', compact('users', 'currentUserId'));
    }
    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'activo' => 'required',
    ]);

    // Obtén las iniciales del nombre
    $iniciales = '';
    $palabras = explode(' ', $request->nombre);
    
    if (count($palabras) > 1) {
        foreach ($palabras as $palabra) {
            $iniciales .= strtoupper(substr($palabra, 0, 1));
        }
    } else {
        $iniciales = strtoupper(substr($request->nombre, 0, 2));
    }

    // Límite de caracteres para la columna 'id' en la base de datos
    $idMaxLength = 2;
    $iniciales = substr($iniciales, 0, $idMaxLength);

    // Verifica si el valor de la clave primaria ya existe en la base de datos
    while (TipoIdentificacion::find($iniciales)) {
        // Si ya existe, genera un nuevo valor de clave primaria
        // Puedes modificar esta lógica para adaptarla a tus necesidades
        $iniciales = strtoupper(substr($request->nombre, 0, 1)) . strtoupper(substr($request->nombre, 1, 1) . rand(0, 9));
    }
    $tipo_identificacion = new TipoIdentificacion([
        'id' => $iniciales,
        'nombre' => $request->nombre,
        'activo' => $request->activo,
        'Id_Dian'=> $request->Id_Dian,
        'usuario_id' => Auth::id(),
    ]);

    $tipo_identificacion->save();

    return redirect()->route('tipos_identificacion.index')
                     ->with('success', 'Tipo de identificación creado exitosamente.');
}
   public function show($id)
    {
        //
    }

    public function delete($id)
{
    $tipo_identificacion = TipoIdentificacion::find($id);
    return view('tipos_identificacion.delete', compact('tipo_identificacion'));
}

    public function edit($id)
{
    $tipo_identificacion = TipoIdentificacion::findOrFail($id);
    $users = User::all();
    $currentUserId = auth()->user()->id;
    return view('tipos_identificacion.edit', compact('tipo_identificacion', 'users', 'currentUserId'));
}
public function update(Request $request, $id)
{ 
    $request->validate([
        'nombre' => 'required',
        'id' => 'required',
        'activo' => 'required',
        'Id_Dian' => 'required',
        'usuario_id' => 'required',
    ]);

    $tipo_identificacion = TipoIdentificacion::findOrFail($id);
    try {
        $tipo_identificacion->nombre = $request->input('nombre');
        $tipo_identificacion->id = $request->input('id');
        $tipo_identificacion->activo = $request->input('activo');
        $tipo_identificacion->Id_Dian = $request->input('Id_Dian');
        $tipo_identificacion->usuario_id = $request->input('usuario_id');

        $tipo_identificacion->save();
    } catch (\Exception $e) {
        // Retorna un mensaje de error si la actualización falla
        return redirect()->back()->with('error', 'Error al actualizar el tipo de identificación: ' . $e->getMessage());
    }
    
    return redirect()->route('tipos_identificacion.index')
                     ->with('success', 'Tipo de identificación actualizado exitosamente.');
}

public function destroy($id)
{
    $tipo_identificacion = TipoIdentificacion::find($id);
    $tipo_identificacion->delete();
    return redirect()->route('tipos_identificacion.index')->with('success', 'El tipo de identificación ha sido eliminado.');
}


}
