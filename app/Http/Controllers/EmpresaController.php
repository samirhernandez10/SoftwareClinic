<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;
use App\Models\Departamento;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\TipoIdentificacion;
use App\Models\Barrio;
use App\Models\Empresa;
use App\Models\EstadoCivil;



class EmpresaController extends Controller
{
    public function index()
    
{   $users = User::all();
    
    $empresa = Empresa::with(['tipoIdentificacion', 'municipio'])->get();
        $categorias = [0 => 'Empresa', 1 => 'EPS', 2 => 'ARL'];
        $tiposPersona = [0 => 'Natural', 1 => 'Jurídica'];
        $opcionesSiNo = [0 => 'No', 1 => 'Sí'];
        $opcionesEstado = [false => 'Inactivo', true => 'Activo'];
    return view('empresa.index', compact('users','empresa', 'categorias', 'tiposPersona', 'opcionesSiNo', 'opcionesEstado'));
}

    public function create()
{
    $users = User::all();
    $id_tipo_identificacion = TipoIdentificacion::all();
    $id_municipio = Municipio::all();
    $id_departamento = Departamento::all();

    $users = User::all();

    $empresa = new Empresa([
        'categoria' , // Empresa
        'TipoPersona' , // Jurídica
        'FacTInterna' , // No
        'EsConvenioMp' , // No
        'EsPlaboratorio' , // No
        'EsManejoResiduos' , // No
        'EsNomina' , // No
        'requiereAuditoria' , // No
        'activo' => true, // Activo
        
    ]);

    return view('empresa.create', compact('empresa', 'id_tipo_identificacion', 'id_municipio', 'id_departamento'));
}


   
    public function store(Request $request)
{
    // Validación de los datos del formulario
    $request->validate([
        'Nbre' => 'required|max:150',
        'id_tipo_identificacion' => 'required|max:2',
        'no_documento' => 'required|max:30|unique:id_empresa',
    ]);

    $empresa = new Empresa();

    // Asignar los valores del formulario
    $empresa->Apellido1 = $request->input('Apellido1');
    $empresa->Apellido2 = $request->input('Apellido2');
    $empresa->Nombre1 = $request->input('Nombre1');
    $empresa->Nombre2 = $request->input('Nombre2');
    $empresa->Nbre = $request->input('Nbre');
    $empresa->id_tipo_identificacion = $request->input('id_tipo_identificacion');
    $empresa->no_documento = $request->input('no_documento');
    $empresa->Dig_Verificacion = $request->input('Dig_Verificacion');
    $empresa->id_departamento = $request->input('id_departamento');
    $empresa->id_municipio = $request->input('id_municipio');
    $empresa->direccion = $request->input('direccion');
    $empresa->telefono = $request->input('telefono');
    $empresa->CHabilitacion = $request->input('CHabilitacion');
    $empresa->movil = $request->input('movil');
    $empresa->fax = $request->input('fax');
    $empresa->correo = $request->input('correo');
    $empresa->correoFacturaElectronica = $request->input('correoFacturaElectronica');
    $empresa->contacto = $request->input('contacto');
    $empresa->CodigoPresupuestal = $request->input('CodigoPresupuestal');
    $empresa->Transp = $request->has('Transp') ? 1 : 0;
    $empresa->categoria = $request->has('categoria') ? 1 : 0;
    $empresa->TipoPersona = $request->has('TipoPersona')? 1 : 0;
    $empresa->FacTInterna = $request->has('FacTInterna')? 1 : 0;
    $empresa->EsNomina = $request->has('EsNomina')? 1 : 0;
    $empresa->requiereAuditoria = $request->has('requiereAuditoria')? 1 : 0;
    $empresa->DocComodin = $request->input('DocComodin');
    $empresa->activo = $request->has('activo')? 1 : 0;

    // Guardar la empresa en la base de datos
    $empresa->save();

    // Redireccionar a la lista de empresas con un mensaje de éxito
    return redirect()->route('empresa.index')->with('success', 'La empresa se ha registrado correctamente.');
}

   
    public function show($id)
{
    $empresa = Empresa::findOrFail($id);
    return view('empresa.show', compact('empresa'));
}

    public function edit($id)
{
    $empresa = Empresa::findOrFail($id);
    $tipos_identificacion = TipoIdentificacion::pluck('nombre', 'id');
    $municipios = Municipio::pluck('nombre', 'id');
    return view('empresa.edit', compact('empresa', 'tipos_identificacion', 'municipios'));
}

    public function update(Request $request, Empresa $empresa)
{
    $validatedData = $request->validate([
        'Apellido1' => 'nullable|string|max:200',
        'Apellido2' => 'nullable|string|max:200',
        'Nombre1' => 'nullable|string|max:200',
        'Nombre2' => 'nullable|string|max:200',
        'Nbre' => 'required|string|max:150',
        'id_tipo_identificacion' => 'required|string|max:2',
        'no_documento' => 'required|string|max:30|unique:id_empresa',
        'Dig_Verificacion' => 'nullable|string',
        'id_municipio' => 'nullable|exists:id_municipio,id',
        'direccion' => 'nullable|string|max:255',
        'telefono' => 'nullable|string|max:20',
        'CHabilitacion' => 'nullable|string|max:20',
        'movil' => 'nullable|string|max:20',
        'fax' => 'nullable|string|max:20',
        'correo' => 'nullable|email|max:255',
        'correoFacturaElectronica' => 'nullable|email|max:255',
        'contacto' => 'nullable|string|max:200',
        'CodigoPresupuestal' => 'nullable|string|max:255',
        'Transp' => 'nullable|boolean',
        'categoria' => 'nullable|integer|in:0,1,2',
        'TipoPersona' => 'nullable|boolean',
        'FacTInterna' => 'nullable|boolean',
        'EsConvenioMp' => 'nullable|boolean',
        'EsPlaboratorio' => 'nullable|boolean',
        'EsManejoResiduos' => 'nullable|boolean',
        'EsNomina' => 'nullable|boolean',
        'requiereAuditoria' => 'nullable|boolean',
        'DocComodin' => 'nullable|string|max:255',
        'activo' => 'nullable|boolean',
    ]);

    $empresa->update([
        'Apellido1' => $request->input('apellido1'),
        'Apellido2' => $request->input('apellido2'),
        'Nombre1' => $request->input('nombre1'),
        'Nombre2' => $request->input('nombre2'),
        'Nbre' => $request->input('nbre'),
        'id_tipo_identificacion' => $request->input('id_tipo_identificacion'),
        'no_documento' => $request->input('no_documento'),
        'Dig_Verificacion' => $request->input('dig_verificacion'),
        'id_municipio' => $request->input('id_municipio'),
        'direccion' => $request->input('direccion'),
        'telefono' => $request->input('telefono'),
        'CHabilitacion' => $request->input('chabilitacion'),
        'movil' => $request->input('movil'),
        'fax' => $request->input('fax'),
        'correo' => $request->input('correo'),
        'correoFacturaElectronica' => $request->input('correo_factura_electronica'),
        'contacto' => $request->input('contacto'),
        'CodigoPresupuestal' => $request->input('codigo_presupuestal'),
        'Transp' => $request->input('transp'),
        'categoria' => $request->input('categoria'),
        'TipoPersona' => $request->input('tipo_persona'),
        'FacTInterna' => $request->input('fac_t_interna'),
        'EsConvenioMp' => $request->input('es_convenio_mp'),
        'EsPlaboratorio' => $request->input('es_plaboratorio'),
        'EsManejoResiduos' => $request->input('es_manejo_residuos'),
        'EsNomina' => $request->input('es_nomina'),
        'requiereAuditoria' => $request->input('requiere_auditoria'),
        'DocComodin' => $request->input('doc_comodin'),
        'activo' => $request->input('activo'),
    ]);

    return redirect()->route('empresa.show', $empresa);
}

    public function destroy($id)
{
    $empresa = Empresa::findOrFail($id);
    $empresa->delete();

    return redirect()->route('empresa.index')->with('success', 'Empresa eliminada correctamente.');
}
public function inicio()
{
    $empresas = Empresa::all();
    return view('empresas.inicio', compact('empresas'));
}
}
