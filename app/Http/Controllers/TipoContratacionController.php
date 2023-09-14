<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoContratacion;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class TipoContratacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $search = $request->input('search');
    $tipo_contratacion = TipoContratacion::query()
        ->where('nombre','LIKE', "%{$search}%")
        ->get();

    return view('tipo_contratacion.index', compact('tipo_contratacion'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $tipo_contratacion = TipoContratacion::all();
        $users = User::all();
        $currentUserId = Auth::id();
        return view('tipo_contratacion.create', compact('users', 'currentUserId','tipo_contratacion'));
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
            'idresolucion014' => 'required',
            'idresolucion084' => 'required',
            'estado' => 'nullable|boolean',

        ]);

        $tipo_contratacion = new TipoContratacion();
        $tipo_contratacion->nombre = $request->nombre;
        $tipo_contratacion->idresolucion014 = $request->idresolucion014;
        $tipo_contratacion->idresolucion084 = $request->idresolucion084;
        $tipo_contratacion->estado = $request->estado ?? false;
        $tipo_contratacion->usuario_id = Auth::id();
// Guardar la instancia del modelo en la base de datos
        $tipo_contratacion->save();

        return redirect()->route('tipo_contratacion.index')->with('status', 'Tipo Contratacion creado exitosamente.');

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
    $tipo_contratacion = TipoContratacion::find($id);
    $tipo_contratacion->delete();
    return redirect()->route('tipo_contratacion.index')->with('success', 'Tipo Contratacion eliminado exitosamente.');
}
}
