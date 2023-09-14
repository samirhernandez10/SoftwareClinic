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
                    <div class="card-header">Tipo Regimen</div>
                    <form action="{{ route('tipo_regimen.index') }}" method="GET">
                    <div class="mt-3">
                            <a href="{{ route('tipo_regimen.create') }}" class="btn btn-primary">Añadir Nuevo</a>
                        </div>
    <div class="input-group mb-3">
    <input class="form-control mr-sm-2" type="search" name="search" value="{{ request()->query('search') }}" placeholder="Buscar" aria-label="Search">
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
                                    <th scope="col">Tipo Regimen</th>
                                    <th scope="col">Id Rips Regimen</th>
                                    <th scope="col">Estado</th>                              
                                    <th scope="col">Usuairo </th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tipo_regimen as $tipo_regimen)
                                    <tr>
                                        <td>{{ $tipo_regimen->id }}</td>
                                        <td>{{ $tipo_regimen->nombre }}</td>
                                        <td>{{ $tipo_regimen->idripsregimen }}</td>
                                        <td>{{ $tipo_regimen->estado }}</td>
                                        <td>{{ optional($tipo_regimen->usuario)->name }}</td>
                                        <td>
                                            <form action="{{ route('tipo_regimen.destroy', $tipo_regimen->id) }}" method="POST" style="display: inline;">
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

