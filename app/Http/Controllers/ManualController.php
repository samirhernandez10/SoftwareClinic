<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoClaseProced; 
use App\models\TipoMetodo;
use App\models\Manual;
use App\models\SalarioMinimo;
use App\Models\TipoProcedimiento; 
use App\Models\TipoFinProcedimeinto;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ManualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $search = $request->input('search');

    $manuales = Manual::query()
        ->where('nombre','LIKE', "%{$search}%")
        ->get();

    return view('manual.index', compact('manuales'));
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
        return view('manual.create', compact('users', 'currentUserId'));
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
        
    ]);

    // Crear una nueva instancia del modelo
    $manuales = new Manual();

    // Asignar los valores del formulario a la instancia del modelo
  
    $manuales->nombre = $request->nombre;
    $manuales->estado = $request->estado ?? false;
    $manuales->usuario_id = Auth::id();
    

    // Guardar la instancia del modelo en la base de datos
    $manuales->save();

    // Redirigir a la vista de index con un mensaje de éxito
    return redirect()->route('manual.index')
        ->with('status', 'Manual  creado exitosamente.');
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
    public function destroy(Manual $manuales)
{
    $manuales->delete();
    return redirect()->route('manual.index')->with('success', 'Manual eliminado exitosamente.');
}
}
