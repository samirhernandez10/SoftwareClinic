<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoEdad;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TipoEdadController extends Controller
{
  

    public function index()
    {
        $tipo_edad = TipoEdad::all();
        return view('tipo_edad.index', compact('tipo_edad'));
    }

    public function create()
    {
        $users = User::all();
        $currentUserId = Auth::id();
        return view('tipo_edad.create', compact('users', 'currentUserId'));
    }

    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        // ... validaciones adicionales
    ]);

    $tipo_edad = new TipoEdad($request->all());
    $tipo_edad->usuario_id = Auth::id(); // Asegúrate de que estés asignando el usuario_id aquí
    $tipo_edad->estado = 1; // Establecer un valor para el campo 'estado'
    $tipo_edad->save();

    return redirect()->route('tipo_edad.index')->with('success', 'Tipo Edad creado exitosamente.');
}

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $tipo_edad = TipoEdad::findOrFail($id); // Recuperar el registro de tipo_edad basado en el ID
        return view('tipo_edad.edit', compact('tipo_edad'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            // ... validaciones adicionales
        ]);
        $tipo_edad = TipoEdad::findOrFail($id);
        $tipo_edad->update($request->all());

        return redirect()->route('tipo_edad.index')->with('success', 'Tipo Edad actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $tipo_edad = TipoEdad::findOrFail($id);
        $tipo_edad->delete();
        return redirect()->route('tipo_edad.index')->with('success', 'Tipo Edad eliminado exitosamente.');
    }
}
