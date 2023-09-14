<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoClaseProced; 
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class TipoClaseProcedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoclaseproc = TipoClaseProced::all();
        return view('tipoclaseproc.index', compact('tipoclaseproc'));
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
        return view('tipoclaseproc.create', compact('users', 'currentUserId'));
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
    
        $tipoclaseproc = new TipoClaseProced();
        $tipoclaseproc->Nbre = $request->input('Nbre');
        $tipoclaseproc->estado = $request->input('estado');
        $tipoclaseproc->usuario_id = Auth::id();
        $tipoclaseproc->save();
    
        return redirect()->route('tipoclaseproc.index')->with('success', 'Tipo Clase Procedimiento creado exitosamente.');
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
        return view('tipoclaseproc.edit', compact('tipoclaseproc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request)
{
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoClaseProced $tipoclaseproc)
{
    $tipoclaseproc->delete();
    return redirect()->route('tipoclaseproc.index')->with('success', 'Tipo Clase Procedimiento eliminado exitosamente.');
}
}
