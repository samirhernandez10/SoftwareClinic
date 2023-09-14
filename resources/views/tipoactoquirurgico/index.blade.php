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
                    <div class="card-header">Tipo De Acto Quirurgico</div>
                    <form action="{{ route('tipoactoquirurgico.index') }}" method="GET">
                    <div class="mt-3">
                            <a href="{{ route('tipoactoquirurgico.create') }}" class="btn btn-primary">Añadir Nuevo</a>
                        </div>
    <div class="input-group mb-3">
        <input type="text" name="search" class="form-control" placeholder="Buscar por Tipo Usuario" aria-label="Buscar por Tipo Usuario" aria-describedby="buscar">
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
                                    <th scope="col">Id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Usuario </th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tipoactoquirurgico as $tipoactoquirurgico)
                                    <tr>
                                        <td>{{ $tipoactoquirurgico ->id }}</td>
                                        <td>{{ $tipoactoquirurgico ->nombre }}</td>
                                        <td>{{ optional($tipoactoquirurgico->usuario)->name }}</td>
                                        <td>
                                            <form action="{{ route('tipoactoquirurgico.destroy', $tipoactoquirurgico->id) }}" method="POST" style="display:inline;">
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
