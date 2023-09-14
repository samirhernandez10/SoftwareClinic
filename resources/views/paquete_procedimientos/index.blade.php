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
                    <div class="card-header">Lista de Paquete Procedimiento</div>
                    <form action="{{ route('paquete_procedimientos.index') }}" method="GET">
    <div class="input-group mb-3">
    <input class="form-control mr-sm-2" type="search" name="search" value="{{ request()->query('search') }}" placeholder="Buscar" aria-label="Search">
     
<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Buscar</button>
</div>
<div class="mt-3">
<a href="{{ route('paquete_procedimientos.create') }}" class="btn btn-primary">Añadir Nuevo</a>
</div>
</form>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id Paquete</th>
                                    <th scope="col">Nombre Paquete </th>
                                    <th scope="col">Id Procedimiento</th>
                                    <th scope="col">Nombre Procedimiento</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($paquete_procedimientos as $paquete_procedimientos)
                                <tr>
        <td>{{ $paquete_procedimientos->paquetes }}</td>
        <td>{{ optional($paquete_procedimientos->paquete)->nombre }}</td>
        <td>{{ $paquete_procedimientos->procedimiento }}</td>
        <td>{{ optional($paquete_procedimientos->procedimientos)->Nbre }}</td>
        <td>{{ $paquete_procedimientos->cantidad }}</td>
        <td>{{ optional($paquete_procedimientos->usuario)->name }}</td>
        <td>
                                            <form action="{{ route('paquete_procedimientos.destroy', $paquete_procedimientos->id) }}" method="POST" style="display: inline;">
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

