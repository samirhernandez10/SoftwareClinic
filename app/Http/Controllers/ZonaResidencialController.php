<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ZonaResidencial;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ZonaResidencialController extends Controller
{
    
    public function index()
    {
        $zonaresidencial = ZonaResidencial::all();
        return view('zonaresidencial.index', compact('zonaresidencial'));
    }

    
    public function create()
    {
        $users = User::all();
        $currentUserId = auth()->user() ? auth()->user()->id : null;
        return view('zonaresidencial.create', compact('users', 'currentUserId'));

    }
    
    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'activo' => 'required',
    ]);

    // Obtén las iniciales del nombre
    $iniciales = strtoupper(substr(explode(' ', $request->nombre)[0], 0, 1));

    // Límite de caracteres para la columna 'id' en la base de datos
    $idMaxLength = 1;
    $iniciales = substr($iniciales, 0, $idMaxLength);

    // Verifica si el valor de la clave primaria ya existe en la base de datos
    while (ZonaResidencial::find($iniciales)) {
        // Si ya existe, genera un nuevo valor de clave primaria
        // Puedes modificar esta lógica para adaptarla a tus necesidades
        $iniciales = strtoupper(substr($request->nombre, 0, 1)) . rand(0, 9);
    }

    $zonaresidencial = new ZonaResidencial([
        'id' => $iniciales,
        'nombre' => $request->nombre,
        'activo' => $request->activo,
        'usuario_id' => Auth::id(),
    ]);

    $zonaresidencial->save();

    return redirect()->route('zonaresidencial.index')
                     ->with('success', 'Zona Residencial creado exitosamente.');
}


   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
{
    $zonaresidencial = ZonaResidencial::find($id);
    $zonaresidencial->delete();
    return redirect()->route('zonaresidencial.index')->with('success', 'Zona Residencial ha sido eliminado.');
}
}
