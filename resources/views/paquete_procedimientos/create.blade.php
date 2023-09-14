@extends('layouts.app_menu')

@section('content')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Software Clínico')</title>
    <link rel="stylesheet" type="text/css" href="/css/style_menu.css">

<link rel="stylesheet" type="text/css" href="/css/style_tipoidentificacioncrear.css">


<div class="container">
        <div class="row justify-content-center">
            <div class="my-10">
                <div class="shadow p-3 mb-5 bg-body rounded">
                   <br><br><div class="card-header">{{ __('Crear Paquete Procedimientos') }}</div>
                   <br><br>
                    <div class="card-body">
                    <form class="form-container" method="POST" action="{{ route('paquete_procedimientos.store') }}">
                            @csrf
                            <div class="form-group row">
                            <div class="col-md-6">
                                <label for="paquetes" class="col-form-label">{{ __('Paquete') }}</label>
                                <div class="col-md-6">
                                    <select id="paquetes" class="form-control @error('paquetes') is-invalid @enderror" name="paquetes" value="{{ old('paquetes') }}" required>
                                        <option value="">Seleccione un Paquete</option>
                                        @foreach ($paquetes as $paquetes)
                                            <option value="{{ $paquetes->id }}">{{ $paquetes->nombre }}</option>
                                        @endforeach
                                    </select>
                                    @error('paquetes')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-md-6">
                                <label for="procedimiento" class="col-form-label">{{ __('Procedimiento 3') }}</label>
                                <div class="col-md-6">
                                    <select id="procedimiento" class="form-control @error('procedimiento') is-invalid @enderror" name="procedimiento" value="{{ old('procedimiento') }}" required>
                                        <option value="">Seleccione un Procedimiento</option>
                                        @foreach ($procedimiento as $procedimiento)
                                            <option value="{{ $procedimiento->id }}">{{ $procedimiento->Nbre }}</option>
                                        @endforeach
                                    </select>
                                    @error('procedimiento')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="cantidad" class="col-form-label">{{ __('Cantidad') }}</label>
            <div class="col-md-6">

            <input id="cantidad" type="number" class="form-control @error('cantidad') is-invalid @enderror" name="cantidad" value="{{ old('cantidad') }}" >
            @error('cantidad')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="form-group row">
<div class="col-md-6">
    <label for="estado" class="col-form-label">{{ __('Estado') }}</label>
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
<button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
<button onclick="location.href='{{ route('paquete_procedimientos.index') }}'" class="btn btn-danger">Cancelar </button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@section('content')
