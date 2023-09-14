@extends('layouts.master')
<div class="row">
        <div class="col-sm-12">
            <div class="my-10">
                <div class="card">
                <div class="card-header">
                <h4 class="card-title">Asistente Para la creacion del Paciente </h4>
                <p class="text-muted mb-0">Un potente complemento de asistente para le creacion del paciente paso a paso</p>
                </div>
                <div class="card-body">
                    <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" method="POST" action="{{ route('empresa.store') }}">
                    @csrf
                    <h3>Datos del paciente</h3>
                    <fieldset>
                    <div class="row">
                         <div class="col-sm-3">
                            <div class="form-group row">
                                <label for="Apellido1" class=".col-sm-2 col-form-label">Primer Apellido</label>  
                                <div class="col-lg-9">
                                    <input id="Apellido1" name="Apellido1" type="text" class="form-control">
                                </div>    
                            </div>  
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group row">
                                <label for="Apellido2" class=".col-sm-2 col-form-label">Segundo Apellido</label>  
                                <div class="col-lg-9">
                                    <input id="Apellido2" name="Apellido2" type="text" class="form-control">
                                </div>    
                            </div>  
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group row">
                                <label for="Nombre1" class=".col-sm-2 col-form-label">Primer Nombre</label>  
                                <div class="col-lg-9">
                                    <input id="Nombre1" name="Nombre1" type="text" class="form-control">
                                </div>    
                            </div>  
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group row">
                                <label for="Nombre2" class=".col-sm-2 col-form-label">Segundo Nombre</label>  
                                <div class="col-lg-9">
                                    <input id="Nombre2" name="Nombre2" type="text" class="form-control">
                                </div>    
                            </div>  
                        </div>
                            <div class="campo-container">
                            <div class="form-group row">
                                <label for="Apellido2" class="col-form-label">{{ __('Segundo Apellido') }}</label>
                                    <input id="Apellido2" type="text" class="form-control @error('Apellido2') is-invalid @enderror" name="Apellido2" value="{{ old('Apellido2') }}" >
                                    @error('Apellido2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="campo-container">
                            <div class="form-group row">
                                <label for="Nombre1" class="col-form-label">{{ __('Primer Nombre') }}</label>
                                    <input id="Nombre1" type="text" class="form-control @error('Nombre1') is-invalid @enderror" name="Nombre1" value="{{ old('Nombre1') }}" >
                                    @error('Nombre1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="campo-container">
                            <div class="form-group row">
                                <label for="Nombre2" class="col-form-label">{{ __('Segundo Nombre') }}</label>
                                    <input id="Nombre2" type="text" class="form-control @error('Nombre2') is-invalid @enderror" name="Nombre2" value="{{ old('Nombre2') }}" >
                                    @error('Nombre2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="campo-container">
                            <div class="form-group row">
                                <label for="Nbre" class="col-form-label">{{ __('Nombre o Razon Social') }}</label>
                                    <input id="Nbre" type="text" class="form-control @error('Nbre') is-invalid @enderror" name="Nbre" value="{{ old('Nbre') }}" required autocomplete="Nbre">
                                    @error('Nbre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group row">
                            <div class="col-md-6">
                                <label for="id_tipo_identificacion" class="col-form-label">{{ __('Tipo de Identificación') }}</label>
                                    <select id="id_tipo_identificacion" class="form-control @error('id_tipo_identificacion') is-invalid @enderror" name="id_tipo_identificacion" value="{{ old('id_tipo_identificacion') }}" required>
                                        <option value="">Seleccione Identificacion</option>
                                        @foreach ($tiposIdentificacion as $tipoIdentificacion)
                                            <option value="{{ $tipoIdentificacion->id }}">{{ $tipoIdentificacion->nombre }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_tipo_identificacion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
    <div class="form-group row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="no_documento" class="col-form-label">{{ __('Número de Documento') }}</label>
            <input id="no_documento" type="text" class="form-control @error('no_documento') is-invalid @enderror" name="no_documento" value="{{ old('no_documento') }}" required autocomplete="no_documento">
            @error('no_documento')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="Dig_Verificacion" class="col-form-label">{{ __('Dígito de Verificación') }}</label>
            <input id="Dig_Verificacion" type="text" class="form-control form-control-sm @error('Dig_Verificacion') is-invalid @enderror" name="Dig_Verificacion" value="{{ old('Dig_Verificacion') }}" required autocomplete="Dig_Verificacion">
            @error('Dig_Verificacion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>
<div class="form-group row">
<div class="col-md-6">
<label for="id_municipio" class="col-form-label">{{ __('Municipio') }}</label>
     <select id="id_municipio" class="form-control @error('id_municipio') is-invalid @enderror" name="id_municipio" value="{{ old('id_municipio') }}"required>
        <option value="">Seleccione un municipio</option>
             @foreach ($municipios as $municipio)
                <option value="{{ $municipio->id }}">{{ $municipio->nombre }}</option>
            @endforeach
    </select>  
            @error('id_municipio')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
            @enderror
        </div>
        <div class="form-group row">
            <div class="col-md-6">
        <label for="direccion" class="col-form-label">{{ __('Dirección') }}</label>
        <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}"required autocomplete="direccion">
     @error('direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group row">
                        <div class="col-md-6">
                            <label for="telefono" class="col-form-label">{{ __('Teléfono') }}</label>
                                <input id="telefono" type="tel" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono">
                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group row">
                        <div class="col-md-6">
                            <label for="movil" class="col-form-label">{{ __('Celular') }}</label>
                                <input id="movil" type="tel" class="form-control @error('movil') is-invalid @enderror" name="movil" value="{{ old('movil') }}">
                                @error('movil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
						<div class="form-group row">
                        <div class="col-md-6">
                            <label for="correo" class="col-form-label">{{ __('Correo Electrónico') }}</label>
                                <input id="correo" type="email" class="form-control @error('correo') is-invalid @enderror" name="correo" value="{{ old('correo') }}" required autocomplete="correo">
                                @error('correo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group row">
                            <label for="correoFacturaElectronica" class="col-form-label">{{ __('Correo Factura Electronica') }}</label>
                                <input id="correoFacturaElectronica" type="email" class="form-control @error('correoFacturaElectronica') is-invalid @enderror" name="correoFacturaElectronica" value="{{ old('correoFacturaElectronica') }}">
                                @error('correoFacturaElectronica')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group row">
                    <label for="CodigoPresupuestal" class="col-form-label">{{ __('Código Presupuestal') }}</label>
                        <input id="CodigoPresupuestal" type="text" class="form-control @error('CodigoPresupuestal') is-invalid @enderror" name="CodigoPresupuestal" value="{{ old('CodigoPresupuestal') }}">
                        @error('CodigoPresupuestal')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                         </span>
                        @enderror
                        </div>
                        <div class="form-group row">
<label for="CHabilitacion" class="col-form-label">{{ __('Codigo Habilitacion') }}</label>
<div class="col-md-6">
 <input id="CHabilitacion" type="text" class="form-control @error('CHabilitacion') is-invalid @enderror" name="CHabilitacion" value="{{ old('CHabilitacion') }}">
@error('CHabilitacion')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
 @enderror
</div>
</div>
<div class="form-group row">
<div class="col-md-6">
    <label for="categoria" class="col-form-label">{{ __('Categoría') }}</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="categoria" id="categoria_empresa" value="0" {{ old('categoria', $empresa->categoria) == 0 ? 'checked' : '' }}>
            <label class="form-check-label" for="categoria_empresa">
                {{ __('Empresa') }}
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="categoria" id="categoria_eps" value="1" {{ old('categoria', $empresa->categoria) == 1 ? 'checked' : '' }}>
            <label class="form-check-label" for="categoria_eps">
                {{ __('EPS') }}
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="categoria" id="categoria_arl" value="2" {{ old('categoria', $empresa->categoria) == 2 ? 'checked' : '' }}>
            <label class="form-check-label" for="categoria_arl">
                {{ __('ARL') }}
            </label>
        </div>
        @error('categoria')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="TipoPersona" class="col-form-label">{{ __('Tipo de Persona') }}</label>
    <div class="col-md-6">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="TipoPersona" id="TipoPersona_nartural" value="0" {{ old('TipoPersona', $empresa->TipoPersona) == 0 ? 'checked' : '' }}>
            <label class="form-check-label" for="TipoPersona_juririca">
                {{ __('Natural') }}
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="TipoPersona" id="TipoPersona_juririca" value="1" {{ old('TipoPersona', $empresa->TipoPersona) == 1 ? 'checked' : '' }}>
            <label class="form-check-label" for="TipoPersona_juririca">
                {{ __('Juridica') }}
            </label>
        </div>
        <div class="form-group row">
        <div class="col-md-6">
    <label for="Transp" class="col-form-label">{{ __('Maneja Transporte') }}</label>
        <input id="Transp" type="checkbox" class="form-control @error('Transp') is-invalid @enderror" name="Transp" value="1" {{ old('Transp') ? 'checked' : '' }}>
        @error('Transp')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
        <div class="form-group row">
        <div class="col-md-6">
    <label for="FacTInterna" class="col-form-label">{{ __('Maneja Factura Intena') }}</label>
        <input id="FacTInterna" type="checkbox" class="form-control @error('FacTInterna') is-invalid @enderror" name="FacTInterna" value="1" {{ old('FacTInterna') ? 'checked' : '' }}>
        @error('FacTInterna')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
<div class="col-md-6">
    <label for="EsConvenioMp" class="col-form-label">{{ __('Es Convenio MP') }}</label>
        <input id="EsConvenioMp" type="checkbox" class="form-control @error('EsConvenioMp') is-invalid @enderror" name="EsConvenioMp" value="1" {{ old('EsConvenioMp') ? 'checked' : '' }}>
        @error('EsConvenioMp')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
<div class="col-md-6">
    <label for="EsPlaboratorio" class="col-form-label">{{ __('Es Laboratorio') }}</label>
        <input id="EsPlaboratorio" type="checkbox" class="form-control @error('EsPlaboratorio') is-invalid @enderror" name="EsPlaboratorio" value="1" {{ old('EsPlaboratorio') ? 'checked' : '' }}>
        @error('EsPlaboratorio')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
<div class="col-md-6">
    <label for="EsManejoResiduos" class="col-form-label">{{ __('Maneja Residuos') }}</label>
        <input id="EsManejoResiduos" type="checkbox" class="form-control @error('EsManejoResiduos') is-invalid @enderror" name="EsManejoResiduos" value="1" {{ old('EsManejoResiduos') ? 'checked' : '' }}>
        @error('EsManejoResiduos')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
<div class="col-md-6">
    <label for="Transp" class="col-form-label">{{ __('Transporte') }}</label>
        <input id="Transp" type="checkbox" class="form-control @error('Transp') is-invalid @enderror" name="Transp" value="1" {{ old('Transp') ? 'checked' : '' }}>
        @error('Transp')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
<div class="col-md-6">
    <label for="EsNomina" class="col-form-label">{{ __('Maneja Nomina') }}</label>
        <input id="EsNomina" type="checkbox" class="form-control @error('EsNomina') is-invalid @enderror" name="EsNomina" value="1" {{ old('EsNomina') ? 'checked' : '' }}>
        @error('EsNomina')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
<div class="col-md-6">
    <label for="requiereAuditoria" class="col-form-label">{{ __('Requiere Auditoria') }}</label>
        <input id="requiereAuditoria" type="checkbox" class="form-control @error('requiereAuditoria') is-invalid @enderror" name="requiereAuditoria" value="1" {{ old('requiereAuditoria') ? 'checked' : '' }}>
        @error('requiereAuditoria')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
<div class="col-md-6">
    <label for="activo" class="col-form-label">{{ __('Activo') }}</label>
        <input id="activo" type="checkbox" class="form-control @error('activo') is-invalid @enderror" name="activo" value="1" checked>
        @error('activo')
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
    <button onclick="location.href{{ route('empresa.index') }}" class="btn btn-danger">Cancelar </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')
        <script src="{{ URL::asset('assets/plugins/apex-charts/apexcharts.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/jquery.sales_dashboard.init.js') }}"></script>
        <script src="{{ URL::asset('assets/js/app.js') }}"></script>
        <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/metismenu.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/waves.js') }}"></script>
        <script src="{{ URL::asset('assets/js/feather.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/simplebar.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/moment.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/jquery.animate.init.js') }}"></script>
        <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection