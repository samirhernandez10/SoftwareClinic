<?php

namespace App\Http\Controllers;

use App\Models\PersonalAtiende;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Añade esta línea
use App\Models\User;


class PersonalAtiendeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $search = $request->input('search');

    $personal_atiende = PersonalAtiende::query()
        ->where('nombre','LIKE', "%{$search}%")
        ->get();

    return view('personal_atiende.index', compact('personal_atiende'));
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
        return view('personal_atiende.create', compact('users', 'currentUserId'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Validar los datos del formulario
    $request->validate([
        'nombre' => 'required',
        
    ]);

    // Crear una nueva instancia del modelo
    $personal_atiende = new PersonalAtiende();

    // Asignar los valores del formulario a la instancia del modelo
  
    $personal_atiende->nombre = $request->nombre;
    $personal_atiende->estado = $request->estado ?? false;
    $personal_atiende->usuario_id = Auth::id();
    

    // Guardar la instancia del modelo en la base de datos
    $personal_atiende->save();

    // Redirigir a la vista de index con un mensaje de éxito
    return redirect()->route('personal_atiende.index')->with('status', 'Personal que Atiende  creado exitosamente.');
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
    public function destroy(PersonalAtiende $personal_atiende)
{
    $personal_atiende->delete();
    return redirect()->route('personal_atiende.index')->with('success', 'Personal que Atiende eliminado exitosamente.');
}
}
