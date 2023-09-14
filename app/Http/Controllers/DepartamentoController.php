<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use Illuminate\Support\Facades\Auth;
use App\Imports\DepartamentoImport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\User;

class DepartamentoController extends Controller
{
    
    public function index()
    {
        $departamento = Departamento::all();
        return view('departamento.index', compact('departamento'));
    }

   
    public function create()
    {
        $users = User::all();
        $currentUserId = Auth::id();
        return view('departamento.create', compact('users', 'currentUserId'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|max:4|unique:procedimiento',
            'nombre' => 'required',
            'estado' => 'required',
            'codpais' => 'required',
            // ... validaciones adicionales
        ]);
    
        $departamento = new Departamento($request->all());
        $departamento->id = $request->input('id');
        $departamento->usuario_id = Auth::id(); // Asegúrate de que estés asignando el usuario_id aquí
        $departamento->save();
    
        return redirect()->route('departamento.index')->with('success', 'Departamento creado exitosamente.');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        return view('departamento.edit', compact('departamento'));
    }

    
    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy(Departamento $departamento)
{
    $departamento->delete();
    return redirect()->route('departamento.index')->with('success', 'Departamento eliminado exitosamente.');
}

public function import(Request $request)
{
    $file = $request->file('archivo');

    // Valida el archivo si es necesario

    // Importa los datos del archivo utilizando la clase de importación
    Excel::import(new DepartamentoImport, $file);

    return redirect()->back()->with('success', 'Datos importados correctamente');
}

}
