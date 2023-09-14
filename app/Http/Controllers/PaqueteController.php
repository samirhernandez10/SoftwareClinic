<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Paquetes;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PaqueteController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $paquetes = Paquetes::query()
            ->where('nombre','LIKE', "%{$search}%")
            ->get();
    
        return view('paquetes.index', compact('paquetes'));
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
    $paquetes = Paquetes::all(); // Añadir esta línea
    return view('paquetes.create', compact('users', 'currentUserId', 'paquetes' )); // Añadir  a compact()
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
            'id' => 'required|max:30|unique:paquetes',
            'nombre' => 'required',
            'estado' => 'nullable|boolean',

        ]);

        $paquetes = new Paquetes();


        $paquetes->id = $request->input('id');
        $paquetes->nombre = $request->input('nombre');
        $paquetes->estado = $request->estado ?? true;
        $paquetes->usuario_id = Auth::id();
    
        
        $paquetes->save();

        return redirect()->route('paquetes.index')->with('success', 'El paquete se ha creado correctamente.');
    }

    

    // Guardar la instancia del modelo en la base de dato
    // Redirigir a la vista de index con un mensaje de éxito
   
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
    $paquetes = Paquetes::findOrFail($id);
    $paquetes->delete();
    return redirect()->route('paquetes.index')->with('success', 'Paquete eliminada correctamente.');

    }
}
