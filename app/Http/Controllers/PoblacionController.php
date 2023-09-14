<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poblacion;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class PoblacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poblacion = Poblacion::all();
        return view('poblacion.index', compact('poblacion'));
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
        return view('poblacion.create', compact('users', 'currentUserId'));
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
            // ... validaciones adicionales
        ]);
    
        $poblacion = new Poblacion();
        $poblacion->nombre = $request->input('nombre');
        $poblacion->activo = $request->input('activo');
        $poblacion->usuario_id = Auth::id();
        $poblacion->save();
    
        return redirect()->route('poblacion.index')->with('success', 'Poblacion creado exitosamente.');
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
        return view('poblacion.edit', compact('poblacion'));
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
            'nombre' => 'required',
            // ... validaciones adicionales
        ]);
    
        $poblacion->update($request->all());
    
        return redirect()->route('poblacion.index')->with('success', 'Poblacion actualizado exitosamente.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poblacion $poblacion)
{
    $poblacion->delete();
    return redirect()->route('poblacion.index')->with('success', 'Poblacion eliminado exitosamente.');
}
}
