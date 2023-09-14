<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\TipoAmbito;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TipoAmbitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $search = $request->input('search');

    $tipoambito = TipoAmbito::query()
        ->where('nombre','LIKE', "%{$search}%")
        ->get();

    return view('tipoambito.index', compact('tipoambito'));
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
        return view('tipoambito.create', compact('users', 'currentUserId'));
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
    $tipoambito = new TipoAmbito();

    // Asignar los valores del formulario a la instancia del modelo
  
    $tipoambito->nombre = $request->nombre;
    $tipoambito->estado = $request->estado ?? false;
    $tipoambito->usuario_id = Auth::id();
    

    // Guardar la instancia del modelo en la base de datos
    $tipoambito->save();

    // Redirigir a la vista de index con un mensaje de éxito
    return redirect()->route('tipoambito.index')
        ->with('status', 'Tipo Ambito  creado exitosamente.');
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
    public function destroy(TipoAmbito $tipoambito)
{
    $tipoambito->delete();
    return redirect()->route('tipoambito.index')->with('success', 'Tipo Ambito eliminado exitosamente.');
}
}
