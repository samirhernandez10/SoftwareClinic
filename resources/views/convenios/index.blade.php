@extends('layouts.app_menu')


@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Software Clínico')</title>
    <link rel="stylesheet" type="text/css" href="/css/style_menu.css">
	<link rel="stylesheet" type="text/css" href="/css/style_tipoidentificacion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Convenios Por Empresa</div>
                    <form action="{{ route('convenios.index') }}" method="GET">
                    <div class="mt-3">
                            <a href="{{ route('convenios.create') }}" class="btn btn-primary">Añadir Nuevo</a>
                        </div>
    <div class="input-group mb-3">
    <input class="form-control mr-sm-2" type="search" name="search" value="{{ request()->query('search') }}" placeholder="Buscar Convenio" aria-label="Search">
        <button class="btn btn-outline-secondary" type="submit" id="buscar">Buscar</button>
    </div>
</form>
<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif
<table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Empresa</th>
                                    <th scope="col">Nombre del Convenio</th>
                                    <th scope="col">Codigo Rips</th>
                                    <th scope="col">Manuales</th>
                                    <th scope="col">Capitado - Evento</th>
                                    <th scope="col">Validar Codigo Autorizacion</th>
                                    <th scope="col">Estado</th>                              
                                    <th scope="col">Usuairo </th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($convenios as $convenios)
                                    <tr>
                                        <td>{{ $convenios->id }}</td>
                                        <td>{{ optional($convenios->empresa)->Nbre }}</td>
                                        <td>{{ $convenios->nombre_convenio }}</td>
                                        <td>{{ $convenios->crips }}</td>
                                        <td>{{ optional($convenios->manual)->nombre }}</td>
                                        <td>{{ $convenios->es_capitado }}</td>
                                        <td>{{ $convenios->valida_codigo_autorizacion }}</td>
                                        <td>{{ $convenios->estado }}</td>
                                        <td>{{ optional($convenios->usuario)->name }}</td>
                                        <td>
                                            <form action="{{ route('convenios.destroy', $convenios->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

