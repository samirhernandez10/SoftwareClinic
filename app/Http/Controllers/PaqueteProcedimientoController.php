<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\PaqueteProcedimiento;
use App\models\Paquetes;
use App\models\Procedimiento;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class PaqueteProcedimientoController extends Controller
{
    public function index(Request $request)
{
    $search = $request->query('search');

    $paquete_procedimientos = PaqueteProcedimiento::query()
        ->where('paquetes', 'LIKE', "%{$search}%")
        ->orWhere('procedimiento', 'LIKE', "%{$search}%")
        ->get();

    return view('paquete_procedimientos.index', compact('paquete_procedimientos'));
}


public function create()
{
    $currentUserId = Auth::id();
    $users = User::all();
    $paquetes = Paquetes::all();
    $procedimiento = Procedimiento::all();
    $paquete_procedimientos = new PaqueteProcedimiento
    ([
        'activo' => true, // Activo
    ]);
    return view('paquete_procedimientos.create', compact('procedimiento', 'paquetes', 'paquete_procedimientos','users','currentUserId',));
}


public function store(Request $request)
{
    $request->validate([
        'paquetes' => 'required',
        'procedimiento' => 'required',
        'cantidad' => 'required',
    ]);

    $paquete_procedimientos = new PaqueteProcedimiento();

    // Asignar los valores del formulario
    $paquete_procedimientos->paquetes = $request->input('paquetes');
    $paquete_procedimientos->procedimiento = $request->input('procedimiento');
    $paquete_procedimientos->cantidad = $request->input('cantidad');
    $paquete_procedimientos->estado = $request->input('estado');
    $paquete_procedimientos->usuario_id = Auth::id();


    // Guardar la empresa en la base de datos
    $paquete_procedimientos->save();

    // Redireccionar a la lista de empresas con un mensaje de éxito
    return redirect()->route('paquete_procedimientos.index')->with('success', 'Paquete Procedimiento se ha registrado correctamente.');
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
    $paquete_procedimientos = PaqueteProcedimiento::findOrFail($id);
    $paquete_procedimientos->delete();
    return redirect()->route('paquete_procedimientos.index')->with('success', 'Paquete Procedimientos eliminada correctamente.');

    }

}
