<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoClaseProced; 
use App\models\TipoMetodo;
use App\models\SalarioMinimo;
use App\Models\TipoProcedimiento; 
use App\Models\TipoFinProcedimeinto;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SalarioMinimoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $search = $request->input('search');

    $salario_minimo = SalarioMinimo::query()
        ->where('valor','LIKE', "%{$search}%")
        ->get();

    return view('salario_minimo.index', compact('salario_minimo'));
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
        return view('salario_minimo.create', compact('users', 'currentUserId'));
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
        'valor' => 'required|numeric',
        'anio' => 'required|integer',
        'valor_diario' => 'required|numeric',
        'estado' => 'nullable|boolean',
    ]);

    // Crear una nueva instancia del modelo
    $salario_minimo = new SalarioMinimo();

    // Asignar los valores del formulario a la instancia del modelo
  
    $salario_minimo->valor = $request->valor;
    $salario_minimo->anio = $request->anio;
    $salario_minimo->valor_diario = $request->valor_diario;
    $salario_minimo->estado = $request->estado ?? false;
    $salario_minimo->usuario_id = Auth::id();
    

    // Guardar la instancia del modelo en la base de datos
    $salario_minimo->save();

    // Redirigir a la vista de index con un mensaje de éxito
    return redirect()->route('salario_minimo.index')
        ->with('status', 'Salario Minimo creado exitosamente.');
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
    public function destroy(SalarioMinimo $salario_minimo)
{
    $salario_minimo->delete();
    return redirect()->route('salario_minimo.index')->with('success', 'Salario Minimo eliminado exitosamente.');
}
}
