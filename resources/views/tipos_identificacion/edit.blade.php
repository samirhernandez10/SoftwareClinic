@extends('layouts.app_menu')
@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Software Clínico')</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="/css/style_tipoidentificacionedit.css">
<link rel="stylesheet" type="text/css" href="/css/style.css">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br><br><h1>Editar Tipo de Identificación</h1>
            <form action="{{ route('tipos_identificacion.update', $tipo_identificacion->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{ $tipo_identificacion->id }}" readonly>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $tipo_identificacion->nombre }}" required>
                </div>
                <div class="form-group">
                    <label for="activo">Activo</label>
                    <select class="form-control" id="activo" name="activo">
                        <option value="1" {{ $tipo_identificacion->activo ? 'selected' : '' }}>Sí</option>
                        <option value="0" {{ !$tipo_identificacion->activo ? 'selected' : '' }}>No</option>
                    </select>
                </div>
                
                <div class="form-group">
    <label for="usuario_id">Usuario</label>
    <select class="form-control" id="usuario_id" name="usuario_id">
        @foreach($users as $user)
            <option value="{{ $user->id }}" {{ $user->id == $currentUserId ? 'selected' : '' }}>{{ $user->name }}</option>
        @endforeach
    </select>
</div><br><br>
                <button type="submit" class="btn btn-primary">Actualizar</button><br>
                <a href="{{ route('tipos_identificacion.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection