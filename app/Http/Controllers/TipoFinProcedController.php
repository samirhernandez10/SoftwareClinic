<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoClaseProced; 
use App\Models\TipoProcedimiento; 
use App\Models\TipoFinProcedimeinto;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class TipoFinProcedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    // Obtener los registros de la base de datos
    $tipofinproced = TipoFinProcedimeinto::all();

    // Modificar el formato de los valores 'id' para agregar ceros a la izquierda si es necesario
    foreach ($tipofinproced as $tipofin) {
        if (strlen($tipofin->id) < 2) {
            $tipofin->id = str_pad($tipofin->id, 2, '0', STR_PAD_LEFT);
        }
    }

   

    // Pasar los registros a la vista
    return view('tipofinproced.index', compact('tipofinproced'));
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
        return view('tipofinproced.create', compact('users', 'currentUserId'));
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
        'id' => ['required', 'regex:/^0?\d+$/i', 'unique:Id_TipoFinProced,id'],
        'Nbre' => 'required|string|max:50',
        'EsConsulta' => 'nullable|boolean',
        'estado' => 'nullable|boolean',
    ]);


    $tipofinproced = new TipoFinProcedimeinto($request->all());
    $tipofinproced->id = $request->input('id');
    $tipofinproced->usuario_id = Auth::id(); // Asegúrate de que estés asignando el usuario_id aquí
    $tipofinproced->save();

    // Redirigir a la vista de index con un mensaje de éxito
    return redirect()->route('tipofinproced.index')
        ->with('status', 'Tipo de fin de procedimiento creado exitosamente.');
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
        return view('tipofinproced.edit', compact('tipofinproced'));
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoFinProcedimeinto $tipofinproced)
{
    $tipofinproced->delete();
    return redirect()->route('tipofinproced.index')->with('success', 'Tipo  FIn Procedimiento eliminado exitosamente.');
}
}
