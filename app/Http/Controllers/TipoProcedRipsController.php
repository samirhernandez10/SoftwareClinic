<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoProcedRips; 
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TipoProcedRipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoprocrips = TipoProcedRips::all();
        return view('tipoprocrips.index', compact('tipoprocrips'));
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
        return view('tipoprocrips.create', compact('users', 'currentUserId'));
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
            // ... validaciones adicionales
        ]);
    
        $tipoprocrips = new TipoProcedRips($request->all());
        $tipoprocrips->usuario_id = Auth::id(); // Asegúrate de que estés asignando el usuario_id aquí
        $tipoprocrips->save();
    
        return redirect()->route('tipoprocrips.index')->with('success', 'Tipo Procedimiento Rips creado exitosamente.');
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
    
    }

    public function destroy(TipoProcedRips $tipoprocrips)
{
    $tipoprocrips->delete();
    return redirect()->route('tipoprocrips.index')->with('success', 'Tipo  Procedimiento Rips eliminado exitosamente.');
}
}
