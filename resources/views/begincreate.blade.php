@extends('layouts.app_menu')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Software Clínico')</title>
    <link rel="stylesheet" type="text/css" href="/css/style_tipoidentificacioncrear2.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Nuevo Grupo Sanguineo</h1>                 
                            <div class="card-body">
                    <form class="form-container" method="POST" action="{{ route('grupo_sangre.store') }}">
                            @csrf
                            <div class="campo-container">
                            <div class="form-group row">
                                <label for="Nbre" class="col-form-label">{{ __('Nombre') }}</label>
                                <div class="col-md-6">
                                <input id="Nbre" type="text" class="form-control @error('Nbre') is-invalid @enderror" name="Nbre" value="{{ old('Nbre') }}" required autocomplete>
                                    @error('Nbre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>    
                           
                            <div class="form-group row">
                            <label for="estado" class="col-form-label">{{ __('Activo') }}</label>
                             <input id="estado" type="checkbox" class="form-control @error('estado') is-invalid @enderror" name="estado" value="1" checked>
                             @error('estado')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                         </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar') }}
                                </button>
                                <button onclick="location.href='{{ route('grupo_sangre.index') }}'" class="btn btn-danger">Cancelar </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@section('content')
