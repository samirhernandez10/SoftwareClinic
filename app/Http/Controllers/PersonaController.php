<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Departamento;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Barrio;


class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index(Request $request)
{
    $query = Persona::query();

    // Filtro por número de documento
    if ($request->has('numero_documento')) {
        $numero_documento = $request->input('numero_documento');
        $query->where('no_documento', 'LIKE', '%' . $numero_documento . '%');
    }

    // Filtro por nombre
    if ($request->has('nombre')) {
        $nombre = $request->input('nombre');
        $query->where(function($query) use ($nombre) {
            $query->where('nombre1', 'LIKE', '%' . $nombre . '%')
                ->orWhere('nombre2', 'LIKE', '%' . $nombre . '%')
                ->orWhere('apellido1', 'LIKE', '%' . $nombre . '%')
                ->orWhere('apellido2', 'LIKE', '%' . $nombre . '%');
        });
    }

    // Filtro por EPS
    if ($request->has('eps')) {
        $eps = $request->input('eps');
        $query->where('estadoeps', $eps);
    }

    $persona = $query->get();

    // Exportar a Excel
    if ($request->has('exportar_excel')) {
        $data = [];

        // Encabezados de las columnas
        $headers = [
            'Número documento', 'Nombres', 'Apellidos', 'Fecha de nacimiento',
            'Edad', 'Dirección', 'Teléfono', 'Correo electrónico', 'EPS'
        ];

        // Datos de las personas
        foreach ($persona as $persona) {
            $data[] = [
                $persona->no_documento,
                $persona->nombre1 . ' ' . $persona->nombre2,
                $persona->apellido1 . ' ' . $persona->apellido2,
                $persona->fecha_nac->format('d/m/Y'),
                $persona->edad,
                $persona->direccion,
                $persona->telefono,
                $persona->correo,
                $persona->estadoeps == 1 ? 'Activa' : 'Inactiva'
            ];
        }

        // Crear el archivo Excel
        $file_name = 'personas_' . now()->format('YmdHis') . '.xlsx';
        return Excel::download(new SimpleExcel($headers, $data), $file_name);
    }

    return view('persona.index', compact('persona'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $tiposIdentificacion = TipoIdentificacion::where('activo', true)->orderBy('nombre')->get();
    $sexos = Sexo::orderBy('nombre')->get();
    $tiposEdad = TipoEdad::orderBy('nombre')->get();
    $municipios = Municipio::orderBy('nombre')->get();
    $barrios = Barrio::orderBy('nombre')->get();
    $estadosCiviles = EstadoCivil::orderBy('nombre')->get();
    $etnias = Etnia::orderBy('nombre')->get();
    $users = User::all();
    $currentUserId = Auth::id();

    return view('persona.create', compact('tiposIdentificacion', 'sexos', 'users','tiposEdad', 'municipios', 'barrios', 'estadosCiviles', 'etnias'));
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Validar datos ingresados por el usuario
    $request->validate([
        'id_tipo_identificacion' => 'required',
        'no_documento' => 'required|unique:persona',
        'nombre1' => 'required',
        'apellido1' => 'required',
        'id_sexo' => 'required',
        'fecha_nac' => 'required|date',
        'edad' => 'required|numeric',
        'id_tipo_edad' => 'required',
        'id_municipio' => 'required',
        'id_barrio' => 'required',
        'id_estado_civil' => 'required',
        'correo' => 'required|unique:persona|email',
        'id_etnia' => 'required'
    ]);

    // Crear nueva persona
    $persona = new Persona();
    $persona->id_tipo_identificacion = $request->input('id_tipo_identificacion');
    $persona->no_documento = $request->input('no_documento');
    $persona->nombre1 = $request->input('nombre1');
    $persona->nombre2 = $request->input('nombre2');
    $persona->apellido1 = $request->input('apellido1');
    $persona->apellido2 = $request->input('apellido2');
    $persona->id_sexo = $request->input('id_sexo');
    $persona->fecha_nac = $request->input('fecha_nac');
    $persona->edad = $request->input('edad');
    $persona->id_tipo_edad = $request->input('id_tipo_edad');
    $persona->id_municipio = $request->input('id_municipio');
    $persona->id_barrio = $request->input('id_barrio');
    $persona->direccion = $request->input('direccion');
    $persona->telefono = $request->input('telefono');
    $persona->movil = $request->input('movil');
    $persona->id_estado_civil = $request->input('id_estado_civil');
    $persona->correo = $request->input('correo');
    $persona->grupo_sangre = $request->input('grupo_sangre');
    $persona->rh = $request->input('rh');
    $persona->codigo1sap = $request->input('codigo1sap');
    $persona->id_etnia = $request->input('id_etnia');
    $persona->estadoeps = $request->input('estadoeps');
    $persona->activo = $request->input('activo');
    $persona->usuario_id = Auth::id(); // Obtener id del usuario autenticado
    $persona->save();

    // Redirigir a la página de la lista de personas
    return redirect()->route('persona.index')->with('success', 'La persona se ha agregado correctamente.');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    
public function inicio()
{
    return view('persona.inicio');
}


     public function show($id)
{
    $persona = Persona::findOrFail($id);

    return view('persona.show', compact('persona'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
    
        return view('persona.edit', compact('persona'));
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
        $persona = Persona::findOrFail($id);
        $persona->id_tipo_identificacion = $request->input('id_tipo_identificacion');
        $persona->no_documento = $request->input('no_documento');
        $persona->nombre1 = $request->input('nombre1');
        $persona->nombre2 = $request->input('nombre2');
        $persona->apellido1 = $request->input('apellido1');
        $persona->apellido2 = $request->input('apellido2');
        $persona->id_sexo = $request->input('id_sexo');
        $persona->fecha_nac = $request->input('fecha_nac');
        $persona->edad = $request->input('edad');
        $persona->id_tipo_edad = $request->input('id_tipo_edad');
        $persona->id_municipio = $request->input('id_municipio');
        $persona->id_barrio = $request->input('id_barrio');
        $persona->direccion = $request->input('direccion');
        $persona->telefono = $request->input('telefono');
        $persona->movil = $request->input('movil');
        $persona->id_estado_civil = $request->input('id_estado_civil');
        $persona->correo = $request->input('correo');
        $persona->grupo_sangre = $request->input('grupo_sangre');
        $persona->rh = $request->input('rh');
        $persona->codigo1sap = $request->input('codigo1sap');
        $persona->id_etnia = $request->input('id_etnia');
        $persona->estadoeps = $request->input('estadoeps');
        $persona->activo = $request->input('activo');
        $persona->usuario_id = Auth::id();
        $persona->save();
    
        return redirect()->route('persona.show', ['persona' => $persona])->with('success', 'La persona se ha actualizado correctamente');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();
        
        return redirect()->route('persona.index')->with('success', 'Persona eliminada correctamente');
    }
}
