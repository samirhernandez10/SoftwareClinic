<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoProcedimiento; 
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TipoProcedimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_tipoprocedimiento = TipoProcedimiento::all();
        return view('tipoprocedimiento.index', compact('id_tipoprocedimiento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $id_tipoprocedimiento = new TipoProcedimiento();
    $users = User::all();
    $currentUserId = Auth::id();
    return view('tipoprocedimiento.create', compact('users',  'id_tipoprocedimiento', 'currentUserId'));
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
        'Nbre' => 'required',
        'valoram' => 'required',
        'estado' => 'required'
    ]);

    try {
        $id_tipoprocedimiento = new TipoProcedimiento($request->all());
        $id_tipoprocedimiento->usuario_id = Auth::id();
        $id_tipoprocedimiento->save();

        return redirect()->route('tipoprocedimiento.index')->with('success', 'Tipo Procedimiento creado exitosamente.');
    } catch (\Exception $ex) {
        return back()->withInput()->withErrors(['error' => $ex->getMessage()]);
    }
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
        return view('tipoprocedimiento.edit', compact('id_tipoprocedimiento'));
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
    $request->validate([
        'Nbre' => 'required',
        'valorAmb' => 'required',
        'estado' => 'required',
        // ... validaciones adicionales
    ]);

    $id_tipoprocedimiento = TipoProcedimiento::findOrFail($id); // Añade esta línea para obtener el modelo a actualizar
    $id_tipoprocedimiento->update($request->all());

    return redirect()->route('tipoprocedimiento.index')->with('success', 'Tipo Procedimiento actualizado exitosamente.');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $id_tipoprocedimiento = TipoProcedimiento::findOrFail($id);
    $id_tipoprocedimiento->delete();
    return redirect()->route('tipoprocedimiento.index')->with('success', 'Tipo Procedimiento eliminado exitosamente.');
}
}
