<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstadoCivil;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EstadoCivilController extends Controller
{
    public function index()
    {
        $estado_civil = EstadoCivil::all();
        return view('estado_civil.index', compact('estado_civil'));
    }
 
    public function create()
    {
        $users = User::all();
        $currentUserId = Auth::id();
        return view('estado_civil.create', compact('users', 'currentUserId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            // ... validaciones adicionales
        ]);
        
        $estado_civil = new EstadoCivil($request->all());
        $estado_civil->usuario_id = Auth::id(); // Asegúrate de que estés asignando el usuario_id aquí
        $estado_civil->save();
        return redirect()->route('estado_civil.index')->with('success', 'Estado Civil creado exitosamente.');
       
    }

      public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('estado_civil.edit', compact('estado_civil'));
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy(EstadoCivil $estado_civil)
    {
    $estado_civil->delete();
    return redirect()->route('estado_civil.index')->with('success', 'Estado Civil eliminado exitosamente.');
    }
}
