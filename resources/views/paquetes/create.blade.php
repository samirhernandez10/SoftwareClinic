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
<link rel="stylesheet" type="text/css" href="/css/style_tipoidentificacioncrear.css">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br><br><h1>Nuevo Paquete</h1>
            <form action="{{ route('paquetes.store') }}" method="POST">
                @csrf
                <div class="campo-container">
                            <div class="form-group row">
                                <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Id') }}</label>

                                <div class="col-md-6">
                                    <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="id">

                                    @error('id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="campo-container">
                            <div class="form-group row">
                                <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del Paquete') }}</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre">

                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-body">
                            <div class="form-group row">
                            <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('estado') }}</label>
                             <div class="col-md-6">
                             <input id="estado" type="checkbox" class="form-control @error('estado') is-invalid @enderror" name="estado" value="1" checked>
                            @error('estado')
                             <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                              </span>
                             @enderror
                            </div>
                    </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button onclick="location.href='{{ route('paquetes.index') }}'" class="btn btn-danger">Cancelar </button>
            </form>
        </div>
    </div>
</div>
@endsection

