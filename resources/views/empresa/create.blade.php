@extends('layouts.master')
@section('title', 'SoftwareClinic')
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/jquery-steps/jquery.steps.css') }}">
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Interfaz de usuario @endslot
        @slot('li_2') Configuracion del Sistema @endslot
        @slot('li_3') Empresa @endslot
        @slot('li_4') Añadir Nuevo @endslot
        @slot('title') Empresa @endslot
    @endcomponent

    <style>
        body {
            background-image: url('/images/fondopagemedico.jpg');
            font-family: 'Roboto', Helvetica, sans-serif;
            background-size: cover;
        }

        .card-body {
            border-radius: 20px;
            margin-left: 10px;
        }

        .carousel-inner {
            box-shadow: 0px 5px 6px rgba(0, 0, 0, 0.4);
            border-radius: 20px;
            background-size: cover;
        }

        .lg-4 {
            box-shadow: 0px 5px 6px rgba(0, 0, 0, 0.4);
            border-radius: 20px;
            background-size: cover;
        }

        h1 {
            color: #2F48A7;
        }

        .card {
            opacity: 0.9;
        }
    </style>

    <div class="row">
        <div class="col-sm-12">
            <div class="my-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Crear Empresa</h4>
                        <p class="text-muted mb-0">Un potente complemento de asistente para la creación del paciente paso a paso</p>
                    </div>
                    <div class="card-body">
                        <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" method="POST" action="{{ route('empresa.store') }}">
                            @csrf
                            <h3>Datos Empresa</h3>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="id_tipo_identificacion" class="form-label">{{ __('Tipo de Identificación') }}</label>
                                            <select id="id_tipo_identificacion" class="form-control @error('id_tipo_identificacion') is-invalid @enderror" name="id_tipo_identificacion" required>
                                                <option value="">Seleccione Identificacion</option>
                                                @foreach ($id_tipo_identificacion as $tipoIdentificacion)
                                                    <option value="{{ $tipoIdentificacion->id }}">{{ $tipoIdentificacion->nombre }}</option>
                                                @endforeach
                                            </select>
                                            @error('id_tipo_identificacion')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="no_documento" class="form-label">{{ __('Número de Documento') }}</label>
                                            <input id="no_documento" type="text" class="form-control @error('no_documento') is-invalid @enderror" name="no_documento" required autocomplete="no_documento">
                                            @error('no_documento')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="mb-3">
                                            <label for="Dig_Verificacion" class="form-label">{{ __('Dígito Verif') }}</label>
                                            <input id="Dig_Verificacion" type="text" class="form-control @error('Dig_Verificacion') is-invalid @enderror" name="Dig_Verificacion" required autocomplete="Dig_Verificacion">
                                            @error('Dig_Verificacion')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="mb-3">
                                            <label for="Nbre" class="form-label">{{ __('Nombre o Razón Social') }}</label>
                                            <input id="Nbre" type="text" class="form-control @error('Nbre') is-invalid @enderror" name="Nbre" required autocomplete="Nbre">
                                            @error('Nbre')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="telefono" class="col-form-label">{{ __('Teléfono') }}</label>
                                            <input id="telefono" type="tel" class="form-control @error('telefono') is-invalid @enderror" name="telefono" required autocomplete="telefono">
                                            @error('telefono')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="movil" class="col-form-label">{{ __('Celular') }}</label>
                                            <input id="movil" type="tel" class="form-control @error('movil') is-invalid @enderror" name="movil" value="{{ old('movil') }}">
                                            @error('movil')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="CodigoPresupuestal" class="col-form-label">{{ __('Código Presupuestal') }}</label>
                                            <input id="CodigoPresupuestal" type="text" class="form-control @error('CodigoPresupuestal') is-invalid @enderror" name="CodigoPresupuestal" value="{{ old('CodigoPresupuestal') }}">
                                            @error('CodigoPresupuestal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
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
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="direccion" class="col-form-label">{{ __('Dirección') }}</label>
                                            <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" required autocomplete="direccion">
                                            @error('direccion')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="mb-3">
                                            <label for="correo" class="form-label">{{ __('Correo Electrónico') }}</label>
                                            <input id="correo" type="email" class="form-control @error('correo') is-invalid @enderror" name="correo" required autocomplete="correo">
                                            @error('correo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="correoFacturaElectronica" class="form-label">{{ __('Correo Factura Electronica') }}</label>
                                            <input id="correoFacturaElectronica" type="email" class="form-control @error('correoFacturaElectronica') is-invalid @enderror" name="correoFacturaElectronica" value="{{ old('correoFacturaElectronica') }}">
                                            @error('correoFacturaElectronica')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </fieldset><!--end fieldset-->
                            <h3>Datos del Contacto</h3>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="Apellido1" class="form-label">{{ __('Primer Apellido') }}</label>
                                            <input id="Apellido1" type="text" class="form-control @error('Apellido1') is-invalid @enderror" name="Apellido1">
                                            @error('Apellido1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="Apellido2" class="form-label">{{ __('Segundo Apellido') }}</label>
                                            <input id="Apellido2" type="text" class="form-control @error('Apellido2') is-invalid @enderror" name="Apellido2">
                                            @error('Apellido2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="Nombre1" class="form-label">{{ __('Primer Nombre') }}</label>
                                            <input id="Nombre1" type="text" class="form-control @error('Nombre1') is-invalid @enderror" name="Nombre1">
                                            @error('Nombre1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="Nombre2" class="form-label">{{ __('Segundo Nombre') }}</label>
                                            <input id="Nombre2" type="text" class="form-control @error('Nombre2') is-invalid @enderror" name="Nombre2">
                                            @error('Nombre2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="id_departamento" class="form-label">{{ __('Departamento') }}</label>
                                            <select id="id_departamento" class="form-control @error('id_departamento') is-invalid @enderror" name="id_departamento" required>
                                                <option value="">Seleccione un departamento</option>
                                                @foreach ($id_departamento as $departamento)
                                                    <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                                                @endforeach
                                            </select>
                                            @error('id_departamento')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="id_municipio" class="form-label">{{ __('Municipio') }}</label>
                                            <select id="id_municipio" class="form-control @error('id_municipio') is-invalid @enderror" name="id_municipio" required>
                                                <option value="">Seleccione un municipio</option>
                                                @foreach ($id_municipio as $municipio)
                                                    <option value="{{ $municipio->id }}">{{ $municipio->nombre }}</option>
                                                @endforeach
                                            </select>
                                            @error('id_municipio')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </fieldset><!--end fieldset-->
                            <h3>Datos Adicionales</h3>
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h4 for="categoria" class="card-title">Categoria</h4>
                                                        <p class="text-muted mb-0">Selecciona una categoria para la Empresa</p>
                                                    </div><!--end col-->
                                                </div>  <!--end row-->
                                            </div><!--end card-header-->
                                            <div class="card-body">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="categoria" id="categoria_empresa" value="0" {{ old('categoria', $empresa->categoria) == 0 ? 'checked' : '' }}>
                                                    <label for="categoria_empresa">{{ __('Empresa') }}</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="categoria" id="categoria_eps" value="1" {{ old('categoria', $empresa->categoria) == 1 ? 'checked' : '' }}>
                                                    <label for="categoria_eps">{{ __('EPS') }}</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="categoria" id="categoria_arl" value="2" {{ old('categoria', $empresa->categoria) == 2 ? 'checked' : '' }}>
                                                    <label for="categoria_arl">{{ __('ARL') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h4 for="TipoPersona" class="card-title">Tipo de Persona</h4>
                                                        <p class="text-muted mb-0">Selecciona un Tipo de persona para la Empresa</p>
                                                    </div><!--end col-->
                                                </div>  <!--end row-->
                                            </div><!--end card-header-->
                                            <div class="card-body">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="TipoPersona" id="TipoPersona_natural" value="0" {{ old('TipoPersona', $empresa->TipoPersona) == 0 ? 'checked' : '' }}>
                                                    <label for="TipoPersona_natural">{{ __('Natural') }}</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="TipoPersona" id="TipoPersona_juridica" value="1" {{ old('TipoPersona', $empresa->TipoPersona) == 1 ? 'checked' : '' }}>
                                                    <label for="TipoPersona_juridica">{{ __('Juridica') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h4 class="card-title">Transporte</h4>
                                                        <p class="text-muted mb-0">Selecciona si la empresa tiene contratado transporte</p>
                                                    </div><!--end col-->
                                                </div>  <!--end row-->
                                            </div><!--end card-header-->
                                            <div class="card-body">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Transp" name="Transp" checked>
                                                    <label for="Transp">{{ __('Transporte') }}</label>
                                                </div>
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </div><!--end col-->
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h4 class="card-title">Factura Interna</h4>
                                                        <p class="text-muted mb-0">Selecciona si la empresa maneja factura interna</p>
                                                    </div><!--end col-->
                                                </div>  <!--end row-->
                                            </div><!--end card-header-->
                                            <div class="card-body">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="FacTInterna" name="FacTInterna" value="1" checked>
                                                    <label for="FacTInterna">{{ __('Factura Interna') }}</label>
                                                </div>
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </div><!--end col-->
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h4 class="card-title">Convenio MP</h4>
                                                        <p class="text-muted mb-0">Selecciona si la empresa es Convenio MP</p>
                                                    </div><!--end col-->
                                                </div>  <!--end row-->
                                            </div><!--end card-header-->
                                            <div class="card-body">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="EsConvenioMp" name="EsConvenioMp" value="1" checked>
                                                    <label for="EsConvenioMp">{{ __('Convenio MP') }}</label>
                                                </div>
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </div><!--end col-->
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h4 class="card-title">Laboratorio</h4>
                                                        <p class="text-muted mb-0">Selecciona si la empresa maneja Laboratorio</p>
                                                    </div><!--end col-->
                                                </div>  <!--end row-->
                                            </div><!--end card-header-->
                                            <div class="card-body">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Laboratorio" name="Laboratorio" value="1" checked>
                                                    <label for="Laboratorio">{{ __('Laboratorio') }}</label>
                                                </div>
                                            </div><!--end card-body-->
                                        </div><!--end card-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </fieldset><!--end fieldset-->
                            <h3>Finalizar</h3>
                            <fieldset>
                                <h2>¡Empresa creada exitosamente!</h2>
                                <p>¡La empresa ha sido creada exitosamente! Puedes continuar configurando otras opciones o volver al listado de empresas.</p>
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                                        <a href="{{ route('empresa.index') }}" class="btn btn-danger">Cancelar</a>
                                    </div>
                            </fieldset><!--end fieldset-->
                        </form><!--end form-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
                                
                    
@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.datatable.init.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.form-wizard.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection


