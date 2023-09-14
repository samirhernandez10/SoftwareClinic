<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoClaseProced; 
use App\models\Manual;
use App\models\Grupo;
use App\models\SalarioMinimo;
use App\Models\TipoProcedimiento; 
use App\Models\TipoFinProcedimeinto;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $search = $request->input('search');

    $grupos = Grupo::query()
        ->where('nombre','LIKE', "%{$search}%")
        ->get();

    return view('manualgrupos.index', compact('grupos'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $users = User::all();
    $currentUserId = Auth::id();
    $manuales = Manual::all(); // Añadir esta línea
    return view('manualgrupos.create', compact('users', 'currentUserId', 'manuales')); // Añadir 'manuales' a compact()
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Validar los datos del formulario
    $request->validate([
        'nombre' => 'required',
        'numero_grupo' => 'required',
        'manual_id' => 'required',
        'estado' => 'nullable|boolean',
    ]);

    // Crear una nueva instancia del modelo
    $grupos = new Grupo();

    // Asignar los valores del formulario a la instancia del modelo
  
    $grupos->nombre = $request->nombre;
    $grupos->numero_grupo = $request->numero_grupo;
    $grupos->manual_id = $request->manual_id;
    $grupos->estado = $request->estado ?? false;
    $grupos->usuario_id = Auth::id();
    

    // Guardar la instancia del modelo en la base de datos
    $grupos->save();

    // Redirigir a la vista de index con un mensaje de éxito
    return redirect()->route('manualgrupos.index')
        ->with('status', 'Grupo Manual  creado exitosamente.');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grupo $grupos)
{
    $grupos->delete();
    return redirect()->route('manualgrupos.index')->with('success', 'Grupo Manualeliminado exitosamente.');
}
}