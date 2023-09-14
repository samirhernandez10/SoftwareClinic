<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\TipoDiagnostico;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TipoDiagnosticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $search = $request->input('search');

    $tipodiagnostico = TipoDiagnostico::query()
        ->where('nombre','LIKE', "%{$search}%")
        ->get();

    return view('tipodiagnostico.index', compact('tipodiagnostico'));
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
        return view('tipodiagnostico.create', compact('users', 'currentUserId'));
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
    $tipodiagnostico = new TipoDiagnostico();

    // Asignar los valores del formulario a la instancia del modelo
  
    $tipodiagnostico->nombre = $request->nombre;
    $tipodiagnostico->estado = $request->estado ?? false;
    $tipodiagnostico->usuario_id = Auth::id();
    

    // Guardar la instancia del modelo en la base de datos
    $tipodiagnostico->save();

    // Redirigir a la vista de index con un mensaje de éxito
    return redirect()->route('tipodiagnostico.index')
        ->with('status', 'Tipo Diagnostico  creado exitosamente.');
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
    public function destroy(TipoDiagnostico $tipodiagnostico)
{
    $tipodiagnostico->delete();
    return redirect()->route('tipodiagnostico.index')->with('success', 'Tipo Diagnostico eliminado exitosamente.');
}
}
