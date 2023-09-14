<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoClaseProced; 
use App\models\TipoMetodo;
use App\Models\TipoProcedimiento; 
use App\Models\TipoFinProcedimeinto;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TipoMetodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $search = $request->input('search');

    $tipometodo = TipoMetodo::query()
        ->where('Nbre', 'LIKE', "%{$search}%")
        ->get();

    return view('tipometodo.index', compact('tipometodo'));
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
        return view('tipometodo.create', compact('users', 'currentUserId'));
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
        'Nbre' => 'required|string|max:50',
        'estado' => 'nullable|boolean',
    ]);

    // Crear una nueva instancia del modelo
    $tipometodo = new TipoMetodo();

    // Asignar los valores del formulario a la instancia del modelo
    $tipometodo->id = $request->id;
    $tipometodo->Nbre = $request->Nbre;
    $tipometodo->Nbre = $request->Nbre;
    $tipometodo->Nbre = $request->Nbre;
    $tipometodo->estado = $request->estado ?? false;
    $tipometodo->usuario_id = Auth::id();
    

    // Guardar la instancia del modelo en la base de datos
    $tipometodo->save();

    // Redirigir a la vista de index con un mensaje de éxito
    return redirect()->route('tipometodo.index')
        ->with('status', 'Tipo Metodo creado exitosamente.');
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
    public function destroy(TipoMetodo $tipometodo)
{
    $tipometodo->delete();
    return redirect()->route('tipometodo.index')->with('success', 'Tipo Metodo eliminado exitosamente.');
}
}
