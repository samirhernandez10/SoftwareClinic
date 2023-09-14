<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\TipoPlan;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TipoPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $search = $request->input('search');

    $tipo_plan = TipoPlan::query()
        ->where('nombre','LIKE', "%{$search}%")
        ->get();

    return view('tipo_plan.index', compact('tipo_plan'));
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
        return view('tipo_plan.create', compact('users', 'currentUserId'));
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
    $tipo_plan = new TipoPlan();

    // Asignar los valores del formulario a la instancia del modelo
  
    $tipo_plan->nombre = $request->nombre;
    $tipo_plan->estado = $request->estado ?? false;
    $tipo_plan->usuario_id = Auth::id();
    

    // Guardar la instancia del modelo en la base de datos
    $tipo_plan->save();

    // Redirigir a la vista de index con un mensaje de éxito
    return redirect()->route('tipo_plan.index')->with('status', 'Tipo Plan  creado exitosamente.');
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
    public function destroy($id)
{
    $tipo_plan = TipoPlan::findOrFail($id);
    $tipo_plan->delete();
    return redirect()->route('tipo_plan.index')->with('success', 'Tipo Plan eliminado exitosamente.');
}
}
