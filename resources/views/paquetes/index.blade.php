@extends('layouts.app_menu')
@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Software Clínico')</title>
	<link rel="stylesheet" type="text/css" href="/css/style_tipoidentificacion.css">
    <link rel="stylesheet" type="text/css" href="/css/stylefooters.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<div class="container">
    <div class="row">
        <div class="col-md-12">
        @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <h1>Paquetes</h1>
            <a href="{{ route('paquetes.create') }}" class="btn btn-primary">Añadir Nuevo</a>
            <table class="table table-striped mt-3">
                <thead><br>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Activo</th>
                        <th>Usuario</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($paquetes as $paquetes)
                    <tr>
                        <td>{{ $paquetes->id }}</td>
                        <td>{{ $paquetes->nombre }}</td>
                        <td>{{ $paquetes->estado ? 'Sí' : 'No' }}</td>
                        <td>{{ optional($paquetes->usuario)->name }}</td>
                        <td><form action="{{ route('paquetes.destroy', $paquetes->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </body>
@endsection
