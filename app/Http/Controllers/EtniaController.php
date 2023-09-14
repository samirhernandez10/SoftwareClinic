<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etnia;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EtniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etnia = Etnia::all();
        return view('etnia.index', compact('etnia'));
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
        return view('etnia.create', compact('users', 'currentUserId'));
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
    
        $etnia = new Etnia($request->all());
        $etnia->usuario_id = Auth::id(); // Asegúrate de que estés asignando el usuario_id aquí
        $etnia->save();
    
        return redirect()->route('etnia.index')->with('success', 'Etnia creado exitosamente.');
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
        return view('etnia.edit', compact('etnia'));
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
    
        $etnia->update($request->all());
    
        return redirect()->route('etnia.index')->with('success', 'Etnia actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etnia $etnia)
{
    $etnia->delete();
    return redirect()->route('etnia.index')->with('success', 'Etnia eliminado exitosamente.');
}
}
