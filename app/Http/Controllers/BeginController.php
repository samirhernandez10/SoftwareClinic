<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Begin;

class BeginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $search = $request->input('search');

    $begin = Begin::query()
        ->where('nombre','LIKE', "%{$search}%")
        ->get();

    return view('begin.index', compact('begin'));
}

 
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
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
        //
    }
}
