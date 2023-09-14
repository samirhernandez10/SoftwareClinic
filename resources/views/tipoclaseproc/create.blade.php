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
                   <br><br><div class="card-header">{{ __('Crear Clase Procedimiento') }}</div>
                   <br><br>

                    <div class="card-body">
                    <form class="form-container" method="POST" action="{{ route('tipoclaseproc.store') }}">
                            @csrf
                            <div class="campo-container">
                            <div class="form-group row">
                                <label for="Nbre" class="col-form-label">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="Nbre" type="text" class="form-control @error('Nbre') is-invalid @enderror" name="Nbre" value="{{ old('Nbre') }}" required autocomplete="Nbre">

                                    @error('Nbre')
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
                                <button onclick="location.href='{{ route('tipoclaseproc.index') }}'" class="btn btn-danger">Cancelar </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@section('content')
