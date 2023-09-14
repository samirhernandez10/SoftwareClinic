<?php

namespace App\Http\Controllers;

use App\Models\CausaExterna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Añade esta línea
use App\Models\User;
class CausaExternaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $causas_externas = CausaExterna::all();

        return view('causas_externas.index', compact('causas_externas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $currentUserId = auth()->user() ? auth()->user()->id : null;
        return view('causas_externas.create', compact('users', 'currentUserId'));

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
            'nombre' => 'required',
            'activo' => 'required'
        ]);

        $causas_externas = new CausaExterna([
            'nombre' => $request->get('nombre'),
            'activo' => $request->get('activo'),
            'usuario_id' => Auth::id(),

        ]);
        
        $causas_externas->id = str_pad(CausaExterna::count() + 1, 2, '0', STR_PAD_LEFT);

        $causas_externas->save();

        return redirect()->route('causas_externas.index')
            ->with('success', 'Causa externa creada exitosamente.');
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
    public function destroy($id)
{
    $causas_externas = CausaExterna::find($id);
    $causas_externas->delete();
    return redirect()->route('causas_externas.index')->with('success', 'Causas Externa ha sido eliminado.');
}
}
