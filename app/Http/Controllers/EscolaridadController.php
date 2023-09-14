<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escolaridad;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\User;

class EscolaridadController extends Controller
{
    
    public function index()
    {
        $escolaridad = Escolaridad::all();
        return view('escolaridad.index', compact('escolaridad'));
    }

   
    public function create()
    {
        $users = User::all();
        $currentUserId = Auth::id();
        return view('escolaridad.create', compact('users', 'currentUserId'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|max:4|unique:escolaridad',
            'nombre' => 'required',
            'activo' => 'required',
            // ... validaciones adicionales
        ]);
    
        $escolaridad = new Escolaridad($request->all());
        $escolaridad->id = $request->input('id');
        $escolaridad->usuario_id = Auth::id(); // Asegúrate de que estés asignando el usuario_id aquí
        $escolaridad->save();
    
        return redirect()->route('escolaridad.index')->with('success', 'Escolaridad creado exitosamente.');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        return view('escolaridad.edit', compact('escolaridad'));
    }

    
    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy(Escolaridad $escolaridad)
{
    $escolaridad->delete();
    return redirect()->route('escolaridad.index')->with('success', 'Escolaridad eliminado exitosamente.');
}



}
