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
                    <div class="card-header">Cie10 Patologias</div>
                    <form action="{{ route('patologias.index') }}" method="GET">
                    <div class="mt-3">
                            <a href="{{ route('patologias.create') }}" class="btn btn-primary">Añadir Nuevo</a>
                        </div>
    <div class="input-group mb-3">
    <input class="form-control mr-sm-2" type="search" name="search" value="{{ request()->query('search') }}" placeholder="Buscar Patologia" aria-label="Search">
        <button class="btn btn-outline-secondary" type="submit" id="buscar">Buscar</button>
    </div>
</form>
<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif
<table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Sexo</th>
                                <th>Limite Inferior</th>
                                <th>Limite Superior</th>
                                <th>Capitulo</th>
                                <th>Nombre Capitulo</th>
                                <th>Codigo Grupo Patologia</th>
                                <th>Usuario</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($patologias as $patologia)
                            <tr>
                                <td>{{ $patologia->id }}</td>
                                <td>{{ $patologia->nombre }}</td>
                                <td>{{ $patologia->sexo }}</td>
                                <td>{{ $patologia->LimInf }}</td>
                                <td>{{ $patologia->LimSup }}</td>
                                <td>{{ $patologia->Capitulo }}</td>
                                <td>{{ $patologia->NombreCapitulo }}</td>
                                <td>{{ $patologia->CodigoGrupoPatologia }}</td>
                                <td>{{ optional($patologia->usuario)->name }}</td>
                                <td>
                                    <form action="{{ route('patologias.destroy', $patologia->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
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
