<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoConceptoAgrupProcedimiento; 
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TipoConceptoAgrupProcedimientoController extends Controller
{
    public function index()
    {
        $tipoconceptoagrup = TipoConceptoAgrupProcedimiento::all();
        return view('tipoconceptoagrup.index', compact('tipoconceptoagrup'));
    }

    public function create()
    {
        $users = User::all();
        $currentUserId = auth()->user() ? auth()->user()->id : null;
        return view('tipoconceptoagrup.create', compact('users', 'currentUserId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => ['required', 'regex:/^0?\d+$/i', 'unique:Id_TipoConceptoAgrup,id'],
            'Nbre' => 'required',
            'estado' => 'required'
        ]);

        $tipoconceptoagrup = new TipoConceptoAgrupProcedimiento($request->all());
        $tipoconceptoagrup->id = $request->input('id');
        $tipoconceptoagrup->usuario_id = Auth::id(); // Asegúrate de que estés asignando el usuario_id aquí
        $tipoconceptoagrup->save();

        return redirect()->route('tipoconceptoagrup.index')
            ->with('success', 'Finalidad de la Consulta creada exitosamente.');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
       
    }
    public function destroy($id)
{
    $tipoconceptoagrup = TipoConceptoAgrupProcedimiento::find($id);
    $tipoconceptoagrup->delete();
    return redirect()->route('tipoconceptoagrup.index')->with('success', 'Finalidad Consulta ha sido eliminado.');
}
}
