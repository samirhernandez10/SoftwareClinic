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
                   <br><br><div  class="card-header">{{ __('Crear Nueva Patologia') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('patologias.store') }}">
        @csrf

        <div class="form-group row">
            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>

            <div class="col-md-6">
                <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="id" autofocus>

                @error('id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
         <div class="form-group row">
            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre Patologia') }}</label>

            <div class="col-md-6">
                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" >

                @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>

            <div class="col-md-6">
                <select id="sexo" class="form-control @error('sexo') is-invalid @enderror" name="sexo" value="{{ old('sexo') }}" required autocomplete="sexo">
                    <option value="A">Ambos</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>

                @error('sexo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="LimInf" class="col-md-4 col-form-label text-md-right">{{ __('Limite Inferior') }}</label>

            <div class="col-md-6">
                <select id="LimInf" class="form-control @error('LimInf') is-invalid @enderror" name="LimInf" value="{{ old('LimInf') }}" required autocomplete="LimInf">
                <option value="0">Sin Limite</option>
                    <option value="2">Dias</option>
                    <option value="3">Meses</option>
                </select>

                @error('LimInf')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>  
        <div class="form-group row">
            <label for="LimSup" class="col-md-4 col-form-label text-md-right">{{ __('Limite Superior') }}</label>

            <div class="col-md-6">
                <select id="LimSup" class="form-control @error('LimSup') is-invalid @enderror" name="LimSup" value="{{ old('LimSup') }}" required autocomplete="LimSup">
                <option value="599">Sin Limite</option>
                    <option value="2">Dias</option>
                    <option value="3">Meses</option>
                    <option value="4">Años</option>
                </select>

                @error('LimSup')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>  
        <div class="form-group row">
            <label for="Capitulo" class="col-md-4 col-form-label text-md-right">{{ __('Capitulo') }}</label>

            <div class="col-md-6">
                <input id="Capitulo" type="text" class="form-control @error('Capitulo') is-invalid @enderror" name="Capitulo" value="{{ old('Capitulo') }}">

                @error('Capitulo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>    
        <div class="form-group row">
            <label for="NombreCapitulo" class="col-md-4 col-form-label text-md-right">{{ __('Nombre Capitulo') }}</label>

            <div class="col-md-6">
                <input id="NombreCapitulo" type="text" class="form-control @error('NombreCapitulo') is-invalid @enderror" name="NombreCapitulo" value="{{ old('NombreCapitulo') }}">

                @error('NombreCapitulo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>       
        <div class="form-group row">
            <label for="CodigoGrupoPatologia" class="col-md-4 col-form-label text-md-right">{{ __('Codigo Grupo Patologia') }}</label>

            <div class="col-md-6">
                <input id="CodigoGrupoPatologia" type="text" class="form-control @error('CodigoGrupoPatologia') is-invalid @enderror" name="CodigoGrupoPatologia" value="{{ old('CodigoGrupoPatologia') }}">

                @error('CodigoGrupoPatologia')
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
                                <button onclick="location.href='{{ route('patologias.index') }}'" class="btn btn-danger">Cancelar </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function calculateDailyValue() {
        const salarioInput = document.getElementById('valor');
        const valorDiarioInput = document.getElementById('valor_diario');
        const salario = parseFloat(salarioInput.value);

        if (!isNaN(salario)) {
            const valorDiario = salario / 30;
            valorDiarioInput.value = valorDiario.toFixed(2); // Redondeamos a 2 decimales
        } else {
            valorDiarioInput.value = '';
        }
    }
</script>

@section('content')
