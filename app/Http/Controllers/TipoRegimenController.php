<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoRegimen;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class TipoRegimenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $search = $request->input('search');

    $tipo_regimen = TipoRegimen::query()
        ->where('nombre','LIKE', "%{$search}%")
        ->get();

    return view('tipo_regimen.index', compact('tipo_regimen'));
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
        $tipo_regimen = new TipoRegimen([
            'idripsregimen' => 1, // id rips 
            'estado' => true, // Activo

        ]);
        return view('tipo_regimen.create', compact('users', 'currentUserId','tipo_regimen'));
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
            'idripsregimen' => 'required',
            'estado' => 'nullable|boolean',

        ]);

        $tipo_regimen = new TipoRegimen();
        $tipo_regimen->nombre = $request->nombre;
        $tipo_regimen->idripsregimen = $request->idripsregimen;
        $tipo_regimen->estado = $request->estado ?? false;
        $tipo_regimen->usuario_id = Auth::id();
// Guardar la instancia del modelo en la base de datos
        $tipo_regimen->save();

        return redirect()->route('tipo_regimen.index')->with('status', 'Tipo Regimen creado exitosamente.');


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
    $tipo_regimen = TipoRegimen::find($id);
    $tipo_regimen->delete();
    return redirect()->route('tipo_regimen.index')->with('success', 'Tipo Regimen eliminado exitosamente.');
}
}
