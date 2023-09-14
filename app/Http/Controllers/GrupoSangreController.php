<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\models\GrupoSangre;


class GrupoSangreController extends Controller
{
  
    public function index()
    {
        $grupo_sangre = GrupoSangre::all();
        return view('grupo_sangre.index', compact('grupo_sangre'));
    }

    public function create()
    {
        $users = User::all();
        $currentUserId = Auth::id();
        return view('grupo_sangre.create', compact('users', 'currentUserId'));
    }

 
    public function store(Request $request)
{
    // Validar los datos del formulario
    $request->validate([
        'Nbre' => 'required',
        
    ]);
    // Asignar los valores del formulario a la instancia del modelo
  
    $grupo_sangre = new GrupoSangre($request->all());
    $grupo_sangre->usuario_id = Auth::id(); // Asegúrate de que estés asignando el usuario_id aquí
    $grupo_sangre->save();
    return redirect()->route('grupo_sangre.index')->with('success', 'Grupo Sanguineo creado exitosamente.');
   
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

   
    public function destroy(GrupoSangre $grupo_sangre)
{
    $grupo_sangre->delete();
    return redirect()->route('grupo_sangre.index')->with('success', 'Grupo Sangre eliminado exitosamente.');
}
}
