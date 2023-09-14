<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;
use App\Models\Departamento;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ZonaResidencial;

use App\Models\Barrio;

class BarrioController extends Controller
{
    
    public function index()
{
    $barrio = Barrio::all();
    $municipio = Municipio::all();
    $municipio = ZonaResidencial::all();
    $municipio = Departamento::all();
    
    return view('barrio.index', compact('barrio', 'municipio')); // Asegúrate de pasar 'municipio' aquí
}
    public function create()
{
    $users = User::all();
    $currentUserId = Auth::id();
    $municipio = Municipio::all();
    $departamento = Departamento::all();
    $zonaresidencial = ZonaResidencial::all();
    $selectedMunicipio = $municipio->first()->id; // Asegúrate de que el primer municipio esté seleccionado por defecto
    return view('barrio.create', compact('municipio','departamento','users', 'currentUserId', 'selectedMunicipio','zonaresidencial')); // Añade 'selectedMunicipio' a la vista
}
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'id_municipio' => 'required',
            // ... validaciones adicionales
        ]);
    
        $barrio = new Barrio($request->all());
        $barrio->usuario_id = Auth::id(); // Asegúrate de que estés asignando el usuario_id aquí
        $barrio->save();
    
        return redirect()->route('barrio.index')->with('success', 'Barrio creado exitosamente.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('barrio.edit', compact('barrio'));
    }
    public function update(Request $request, $id)
    {
     }

    public function destroy(Barrio $barrio)
{
    $barrio->delete();
    return redirect()->route('barrio.index')->with('success', 'Barrio eliminado exitosamente.');
}

public function filtrarMunicipios($id)
{
    $municipios = Municipio::where('id_departamento', $id)->select('nombre', 'id')->get();
    return response()->json($municipios);
}


}

