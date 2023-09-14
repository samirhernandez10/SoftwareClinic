@extends('layouts.app_menu')

@section('content')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Software Clínico')</title>
    <link rel="stylesheet" type="text/css" href="/css/style_menu.css">

<link rel="stylesheet" type="text/css" href="/css/style_tipoidentificacioncrear.css">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <br><br><div class="card-header">{{ __('Convenio para Empresa') }}</div>
                    <br><br>
                    <div class="card-body">
                     <form class="form-container" method="POST" action="{{ route('convenios.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="id_empresa" class="col-md-4 col-form-label text-md-right">{{ __('Empresa') }}</label>
                                <div class="col-md-6">
                                    <select id="id_empresa" name="id_empresa" class="form-control @error('id_empresa') is-invalid @enderror" required>
                                        <option value="">Seleccione una Empresa</option>
                                        @foreach ($id_empresa as $id_empresa)
                                            <option value="{{ $id_empresa->id }}">{{ $id_empresa->Nbre }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_empresa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nombre_convenio" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del Convenio') }}</label>

                                <div class="col-md-6">
                                    <input id="nombre_convenio" type="text" class="form-control @error('nombre_convenio') is-invalid @enderror" name="nombre_convenio" value="{{ old('nombre_convenio') }}" >

                                    @error('nombre_convenio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="crips" class="col-md-4 col-form-label text-md-right">{{ __('Codigo Rips') }}</label>

                                <div class="col-md-6">
                                    <input id="crips" type="text" class="form-control @error('crips') is-invalid @enderror" name="crips" value="{{ old('crips') }}" >

                                    @error('crips')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="manuales" class="col-md-4 col-form-label text-md-right">{{ __('Manual') }}</label>

                                <div class="col-md-6">
                                    <select id="manuales" name="manuales" class="form-control @error('manmanualesual') is-invalid @enderror" required>
                                        <option value="">Seleccione un Manual</option>
                                        @foreach ($manuales as $manuales)
                                            <option value="{{ $manuales->id }}">{{ $manuales->nombre }}</option>
                                        @endforeach
                                    </select>

                                    @error('manuales')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
<div class="col-md-6">
    <label for="es_capitado" class="col-form-label">{{ __('Modo de Facturacion') }}</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="es_capitado" id="es_capitado_evento" value="0" {{ old('es_capitado', $convenios->es_capitado) == 0 ? 'checked' : '' }}>
            <label class="form-check-label" for="es_capitado_evento">
                {{ __('Evento por Servicio') }}
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="es_capitado" id="es_capitado_capitado" value="1" {{ old('es_capitado', $convenios->es_capitado) == 1 ? 'checked' : '' }}>
            <label class="form-check-label" for="es_capitado_capitado">
                {{ __('Capitado') }}
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="es_capitado" id="es_capitado_porfactura" value="2" {{ old('es_capitado', $convenios->es_capitado) == 2 ? 'checked' : '' }}>
            <label class="form-check-label" for="es_capitado_porfactura">
                {{ __('Evento Por Factura') }}
            </label>
        </div>
        @error('es_capitado')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>       <div class="form-group row">
        <div class="col-md-6">
    <label for="valida_codigo_autorizacion" class="col-form-label">{{ __('Valida Autorizacion') }}</label>
   
        <input id="valida_codigo_autorizacion" type="checkbox" class="form-control @error('valida_codigo_autorizacion') is-invalid @enderror" name="valida_codigo_autorizacion" value="0" {{ old('valida_codigo_autorizacion') ? 'checked' : '' }}>
        @error('valida_codigo_autorizacion')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
<div class="col-md-6">
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
                                <button onclick="location.href{{ route('convenios.index') }}" class="btn btn-danger">Cancelar </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@section('content')
