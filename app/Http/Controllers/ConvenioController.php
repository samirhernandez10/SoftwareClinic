<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Convenio;
use App\Models\TipoRegimen;
use App\Models\TipoContratacion;
use App\Models\TipoAseguramiento;
use App\Models\TipoPlan;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Empresa;
use App\Models\Manual;

class ConvenioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $convenios = Convenio::with('empresa')
        ->where(function($query) use ($request) {
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where('nombre_convenio', 'like', '%' . $search . '%');
            }
        })
        ->orderBy('id', 'DESC')
        ->get();

    return view('convenios.index', compact('convenios'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id_empresa  = Empresa::all();
        $manuales = Manual::all();
        $tipo_regimen = TipoRegimen::all();
        $tipo_contratacion = TipoContratacion::all();
        $tipo_aseguramiento = TipoAseguramiento::all();
        $tipo_plan = TipoPlan::all();
        $manuales = Manual::all();
        $users = User::all();
        $currentUserId = Auth::id();
        $convenios = new Convenio([
            'es_capitado' => 0, // Empresa
            'valida_codigo_autorizacion' => 0, // Jurídica
            'estado' => true, // Activo
        ]);
        return view('convenios.create', compact('users', 'currentUserId','id_empresa','manuales','convenios','tipo_regimen','tipo_contratacion','tipo_aseguramiento','tipo_plan'));
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
            'id_empresa' => 'required',
            'nombre_convenio' => 'required',
            'crips' => 'required',
            'manuales' => 'required',
            'tipo_regimen' => 'required',
            'tipo_contratacion' => 'required',
            'tipo_aseguramiento' => 'required',
            'tipo_plan' => 'required',
            'valida_codigo_autorizacion' => 'required',
            'estado' => 'nullable|boolean',
        ]);
        $convenios = new Convenio($request->all());
        $convenios->estado = $request->estado ?? false;
        $convenios->usuario_id = Auth::id();
// Guardar la instancia del modelo en la base de datos
        $convenios->save();
        return redirect()->route('convenios.index')->with('status', 'Convenios creado exitosamente.');
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
    public function destroy(Convenio $convenios)
{
    $convenios->delete();
    return redirect()->route('convenios.index')->with('success', 'Convenio eliminado exitosamente.');
}
public function filtrarEmpresa($id_empresa)
{
    $convenio = Convenio::where('id_empresa', $id_empresa)->pluck('Nbre', 'id');
    return response()->json($convenio);
    dd($convenio); // Agrega esta línea

}
}
