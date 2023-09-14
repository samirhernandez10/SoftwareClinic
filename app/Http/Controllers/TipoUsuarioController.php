<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\TipoUsuario;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TipoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $search = $request->input('search');

    $tipo_usuario = TipoUsuario::query()
        ->where('nombre','LIKE', "%{$search}%")
        ->get();

    return view('tipo_usuario.index', compact('tipo_usuario'));
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
        return view('tipo_usuario.create', compact('users', 'currentUserId'));
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
    $tipo_usuario = new TipoUsuario();

    // Asignar los valores del formulario a la instancia del modelo
  
    $tipo_usuario->nombre = $request->nombre;
    $tipo_usuario->estado = $request->estado ?? false;
    $tipo_usuario->usuario_id = Auth::id();
    

    // Guardar la instancia del modelo en la base de datos
    $tipo_usuario->save();

    // Redirigir a la vista de index con un mensaje de éxito
    return redirect()->route('tipo_usuario.index')
        ->with('status', 'Tipo Usuario  creado exitosamente.');
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
    public function destroy(TipoUsuario $tipo_usuario)
{
    $tipo_usuario->delete();
    return redirect()->route('tipo_usuario.index')->with('success', 'Tipo Usuario eliminado exitosamente.');
}
}
