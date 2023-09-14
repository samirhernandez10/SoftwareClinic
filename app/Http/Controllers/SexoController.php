<?php

namespace App\Http\Controllers;

use App\Models\Sexo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Añade esta línea
use App\Models\User;

class SexoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sexo = Sexo::all();
        return view('sexo.index', compact('sexo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $currentUserId = auth()->user() ? auth()->user()->id : null;
        return view('sexo.create', compact('users', 'currentUserId'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'activo' => 'required',
    ]);

    // Obtén las iniciales del nombre
    $iniciales = strtoupper(substr(explode(' ', $request->nombre)[0], 0, 1));

    // Límite de caracteres para la columna 'id' en la base de datos
    $idMaxLength = 1;
    $iniciales = substr($iniciales, 0, $idMaxLength);

    // Verifica si el valor de la clave primaria ya existe en la base de datos
    while (Sexo::find($iniciales)) {
        // Si ya existe, genera un nuevo valor de clave primaria
        // Puedes modificar esta lógica para adaptarla a tus necesidades
        $iniciales = strtoupper(substr($request->nombre, 0, 1)) . rand(0, 9);
    }

    $sexo = new Sexo([
        'id' => $iniciales,
        'nombre' => $request->nombre,
        'activo' => $request->activo,
        'usuario_id' => Auth::id(),
    ]);

    $sexo->save();

    return redirect()->route('sexo.index')
                     ->with('success', 'Sexo creado exitosamente.');
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
    $sexo = Sexo::find($id);
    $sexo->delete();
    return redirect()->route('sexo.index')->with('success', 'Sexo ha sido eliminado.');
}
}
