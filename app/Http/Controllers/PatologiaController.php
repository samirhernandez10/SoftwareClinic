<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patologia; 
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PatologiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
    $search = $request->input('search');

    $patologias = Patologia::query()
        ->where('id','LIKE', "%{$search}%")
        ->orwhere('nombre','LIKE', "%{$search}%")
        ->get();

    return view('patologias.index', compact('patologias'));
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
        return view('patologias.create', compact('users', 'currentUserId'));
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
        'id' => 'required|unique:patologias',
        'nombre' => 'required|string',
        'activo' => 'nullable|boolean',
    ]);

    // Crear una nueva instancia del modelo
    $patologias = new Patologia();

    // Asignar los valores del formulario a la instancia del modelo
  
    $patologias->id = $request->id;
    $patologias->nombre = $request->nombre;
    $patologias->sexo = $request->sexo;
    $patologias->LimInf = $request->LimInf;
    $patologias->LimSup = $request->LimSup;
    $patologias->Capitulo = $request->Capitulo;
    $patologias->NombreCapitulo = $request->NombreCapitulo;
    $patologias->CodigoGrupoPatologia = $request->CodigoGrupoPatologia;
    $patologias->activo = $request->activo ?? false;
    $patologias->usuario_id = Auth::id();
    

    // Guardar la instancia del modelo en la base de datos
    $patologias->save();

    // Redirigir a la vista de index con un mensaje de éxito
    return redirect()->route('patologias.index')
        ->with('status', 'Patologia creado exitosamente.');
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
    public function destroy(Patologia $patologias)
{
    $patologias->delete();
    return redirect()->route('patologias.index')->with('success', 'Patologia eliminado exitosamente.');
}
}
