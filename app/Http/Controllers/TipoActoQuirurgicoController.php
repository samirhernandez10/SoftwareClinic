<?php

namespace App\Http\Controllers;

use App\Models\TipoActoQuirurgico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Añade esta línea
use App\Models\User;

class TipoActoQuirurgicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $search = $request->input('search');

    $tipoactoquirurgico = TipoActoQuirurgico::query()
        ->where('nombre','LIKE', "%{$search}%")
        ->get();

    return view('tipoactoquirurgico.index', compact('tipoactoquirurgico'));
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
        return view('tipoactoquirurgico.create', compact('users', 'currentUserId'));
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
    $tipoactoquirurgico = new TipoActoQuirurgico();

    // Asignar los valores del formulario a la instancia del modelo
  
    $tipoactoquirurgico->nombre = $request->nombre;
    $tipoactoquirurgico->estado = $request->estado ?? false;
    $tipoactoquirurgico->usuario_id = Auth::id();
    

    // Guardar la instancia del modelo en la base de datos
    $tipoactoquirurgico->save();

    // Redirigir a la vista de index con un mensaje de éxito
    return redirect()->route('tipoactoquirurgico.index')->with('status', 'Tipo Acto Quirurgico  creado exitosamente.');
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
    public function destroy(TipoActoQuirurgico $tipoactoquirurgico)
{
    $tipoactoquirurgico->delete();
    return redirect()->route('tipoactoquirurgico.index')->with('success', 'Tipo Acto Quirurgico eliminado exitosamente.');
}
}
