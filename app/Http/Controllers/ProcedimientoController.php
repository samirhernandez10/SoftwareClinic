<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Procedimiento;
use App\Models\TipoProcedRips;
use App\Models\TipoProcedimiento;
use App\Models\TipoFinProcedimeinto;
use App\Models\TipoConceptoAgrupProcedimiento;
use App\Models\Manual;


class ProcedimientoController extends Controller
{
    
    public function index(Request $request)
{
    $search = $request->query('search');

    $procedimiento = Procedimiento::query()
        ->where('id', 'LIKE', "%{$search}%")
        ->orWhere('Nbre', 'LIKE', "%{$search}%")
        ->orWhere('Nbre_Soat', 'LIKE', "%{$search}%")
        ->get();

    return view('procedimiento.index', compact('procedimiento'));
}
    public function create()
    {
        $users = User::all();
        $tipoprocrips = TipoProcedRips::all();
        $id_tipoprocedimiento = TipoProcedimiento::all();
        $Id_TipoFinProced = TipoFinProcedimeinto::all();
        $Id_TipoConceptoAgrup = TipoConceptoAgrupProcedimiento::all();
        $manuales = Manual::all();


        $procedimiento = new Procedimiento([
            'Paquete' => 1, // paquete
            'EsAgenda' => 1, // para aplicar a la agenda 
            'AProcEnfer' => 1, // procedimiento para enfemeria 
            'activo' => true, // Activo
        ]);
        return view('procedimiento.create', compact('procedimiento', 'tipoprocrips', 'id_tipoprocedimiento', 'Id_TipoFinProced', 'Id_TipoConceptoAgrup', 'manuales'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'Nbre' => 'required|max:150',
            'id' => 'required|max:30|unique:procedimiento',
        ]);

        $procedimiento = new Procedimiento();

        // Asignar los valores del formulario
        $procedimiento->id = $request->input('id');
        $procedimiento->Nbre = $request->input('Nbre');
        $procedimiento->Nbre_Soat = $request->input('Nbre_Soat');
        $procedimiento->tipoprocrips = $request->input('tipoprocrips');
        $procedimiento->id_tipoprocedimiento = $request->input('id_tipoprocedimiento');
        $procedimiento->Id_TipoFinProced = $request->input('Id_TipoFinProced');
        $procedimiento->Id_TipoConceptoAgrup = $request->input('Id_TipoConceptoAgrup');
        $procedimiento->manuales = $request->input('manuales');
        $procedimiento->Paquete = $request->input('Paquete');
        $procedimiento->EsAgenda = $request->input('EsAgenda');
        $procedimiento->AProcEnfer = $request->input('AProcEnfer');
        $procedimiento->C_Real = $request->input('C_Real');
        $procedimiento->C_Homologado = $request->input('C_Homologado');
        $procedimiento->C_Personalizado = $request->input('C_Personalizado');
        $procedimiento->activo = $request->input('activo');
    
        // Guardar la empresa en la base de datos
        $procedimiento->save();
    
        // Redireccionar a la lista de empresas con un mensaje de éxito
        return redirect()->route('procedimiento.index')->with('success', 'Procedimiento se ha registrado correctamente.');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
    $procedimiento = Procedimiento::findOrFail($id);
    $procedimiento->delete();
    return redirect()->route('procedimiento.index')->with('success', 'Procedimiento eliminada correctamente.');

    }
}
