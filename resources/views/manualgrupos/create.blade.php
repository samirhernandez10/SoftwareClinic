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
                   <br><br><div class="card-header">{{ __('Grupo Manuales') }}</div>
                   <br><br>                  
                            <div class="card-body">
                    <form class="form-container" method="POST" action="{{ route('manualgrupos.store') }}">
                            @csrf
                            <div class="campo-container">
                            <div class="form-group row">
                                <label for="nombre" class="col-form-label">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="off" oninput="calculateDailyValue()">

                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>    
                            <div class="campo-container">
                            <div class="form-group row">
                                <label for="numero_grupo" class="col-form-label">{{ __('Numero del Grupo') }}</label>

                                <div class="col-md-6">
                                    <input id="numero_grupo" type="number" class="form-control @error('numero_grupo') is-invalid @enderror" name="numero_grupo" value="{{ old('numero_grupo') }}" required autocomplete="numero_grupo">

                                    @error('numero_grupo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>              
                            <div class="form-group row">
                            <label for="manual_id" class="col-form-label">{{ __('Manual') }}</label>
<div class="col-md-6">
    <select id="manual_id" class="form-control @error('manual_id') is-invalid @enderror" name="manual_id" required>
        <option value="">Seleccione un manual</option>
        @foreach ($manuales as $manual)
            <option value="{{ $manual->id }}" {{ old('manual_id') == $manual->id ? 'selected' : '' }}>{{ $manual->nombre }}</option>
        @endforeach
    </select>
    @error('manual_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
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
                                <button onclick="location.href='{{ route('salario_minimo.index') }}'" class="btn btn-danger">Cancelar </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@section('content')
