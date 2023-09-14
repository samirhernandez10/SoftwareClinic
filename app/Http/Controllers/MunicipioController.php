<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Municipio;

class MunicipioController extends Controller
{
    
    public function index()
    {
        $municipio = Municipio::all();
        return view('municipio.index', compact('municipio'));
    }

   
    public function create()
    {
        $users = User::all();
        $currentUserId = Auth::id();
        $departamento = Departamento::all();
        return view('municipio.create', compact('departamento','users', 'currentUserId'));
    }


    
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|max:5|unique:procedimiento',
            'nombre' => 'required',
            'id_departamento' => 'required',
            // ... validaciones adicionales
        ]);
    
        $municipio = new Municipio($request->all());
        $municipio->id = $request->input('id');
        $municipio->usuario_id = Auth::id(); // Asegúrate de que estés asignando el usuario_id aquí
        $municipio->save();
    
        return redirect()->route('municipio.index')->with('success', 'Municipio creado exitosamente.');
    }

   
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        return view('municipio.edit', compact('municipio'));
    }

   
    public function update(Request $request, $id)
    {
    }

  
    public function destroy(Municipio $municipio)
{
    $municipio->delete();
    return redirect()->route('municipio.index')->with('success', 'Municipio eliminado exitosamente.');
}
public function filtrarMunicipio($id_departamento)
{
    $municipios = Municipio::where('id_departamento', $id_departamento)->pluck('nombre', 'id');
    return response()->json($municipios);

}

}
