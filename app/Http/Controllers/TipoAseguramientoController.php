<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoAseguramiento;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class TipoAseguramientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $search = $request->input('search');
    $tipo_aseguramiento = TipoAseguramiento::query()
        ->where('nombre','LIKE', "%{$search}%")
        ->get();

    return view('tipo_aseguramiento.index', compact('tipo_aseguramiento'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $tipo_aseguramiento = TipoAseguramiento::all();
        $users = User::all();
        $currentUserId = Auth::id();
        return view('tipo_aseguramiento.create', compact('users', 'currentUserId','tipo_aseguramiento'));
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
            'estado' => 'nullable|boolean',

        ]);

        $tipo_aseguramiento = new TipoAseguramiento();
        $tipo_aseguramiento->nombre = $request->nombre;
        $tipo_aseguramiento->estado = $request->estado ?? false;
        $tipo_aseguramiento->usuario_id = Auth::id();
// Guardar la instancia del modelo en la base de datos
        $tipo_aseguramiento->save();

        return redirect()->route('tipo_aseguramiento.index')->with('status', 'Tipo Aseguramiento creado exitosamente.');

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
    $tipo_aseguramiento = TipoAseguramiento::find($id);
    $tipo_aseguramiento->delete();
    return redirect()->route('tipo_aseguramiento.index')->with('success', 'Tipo Aseguramiento eliminado exitosamente.');
}
}
