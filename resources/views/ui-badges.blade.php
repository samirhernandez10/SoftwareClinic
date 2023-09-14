@extends('layouts.master')
@section('title') SoftwareClinic @endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Interfaz de usuario @endslot
            @slot('li_2') Elementos @endslot
            @slot('li_3') Insignias @endslot
            @slot('title') Insignias @endslot
        @endcomponent

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplos de insignias</h4>
                                    <p class="text-muted mb-0">Agregue cualquiera de las clases de modificadores mencionadas a continuación para cambiar la apariencia de una insignia.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <span class="badge bg-primary">Primario</span>
                            <span class="badge bg-secondary">Secundario</span>
                            <span class="badge bg-success">Success</span>
                            <span class="badge bg-danger">Peligro</span>
                            <span class="badge bg-warning">Advertencia</span>
                            <span class="badge bg-info">Info</span>
                            <span class="badge bg-light text-dark">Light</span>
                            <span class="badge bg-dark">Dark</span>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplos de insignias de píldoras</h4>
                                    <p class="mb-0 text-muted">Documentación y ejemplos para insignias, nuestro pequeño componente de conteo y etiquetado.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <span class="badge rounded-pill bg-primary">Primario</span>
                            <span class="badge rounded-pill bg-secondary">Secundario</span>
                            <span class="badge rounded-pill bg-success">Success</span>
                            <span class="badge rounded-pill bg-danger">Peligro</span>
                            <span class="badge rounded-pill bg-warning">Advertencia</span>
                            <span class="badge rounded-pill bg-info">Info</span>
                            <span class="badge rounded-pill bg-light">Light</span>
                            <span class="badge rounded-pill bg-dark">Dark</span>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Enlaces Insignias Ejemplos</h4>
                                    <p class="text-muted mb-0">Documentación y ejemplos para insignias, nuestro pequeño componente de conteo y etiquetado.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <a href="#" class="badge bg-primary">Primario</a>
                            <a href="#" class="badge bg-secondary">Secundario</a>
                            <a href="#" class="badge bg-success">Success</a>
                            <a href="#" class="badge bg-danger">Peligro</a>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Enlaces Insignias de pastillas Ejemplos</h4>
                                    <p class="text-muted mb-0">Documentación y ejemplos para insignias, nuestro pequeño componente de conteo y etiquetado.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <a href="#" class="badge rounded-pill bg-primary">Primario</a>
                            <a href="#" class="badge rounded-pill bg-secondary">Secundario</a>
                            <a href="#" class="badge rounded-pill bg-success">Success</a>
                            <a href="#" class="badge rounded-pill bg-danger">Peligro</a>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Insignias Ejemplos blandos</h4>
                                    <p class="text-muted mb-0">Documentación y ejemplos para insignias, nuestro pequeño componente de conteo y etiquetado.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <span class="badge badge-soft-primary">Primary</span>
                            <span class="badge badge-soft-secondary">Secondary</span>
                            <span class="badge badge-soft-success">Success</span>
                            <span class="badge badge-soft-danger">Danger</span>
                            <span class="badge badge-soft-warning">Warning</span>
                            <span class="badge badge-soft-info">Info</span>
                            <span class="badge badge-soft-purple">Purple</span>
                            <span class="badge badge-soft-dark">Dark</span>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Insignias de píldoras Ejemplos blandos</h4>
                                    <p class="mb-0 text-muted">Documentación y ejemplos para insignias, nuestro pequeño componente de conteo y etiquetado.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <span class="badge rounded-pill badge-soft-primary">Primario</span>
                            <span class="badge rounded-pill badge-soft-secondary">Secundario</span>
                            <span class="badge rounded-pill badge-soft-success">Success</span>
                            <span class="badge rounded-pill badge-soft-danger">Peligro</span>
                            <span class="badge rounded-pill badge-soft-warning">Advertencia</span>
                            <span class="badge rounded-pill badge-soft-info">Info</span>
                            <span class="badge rounded-pill badge-soft-pink">Rosado</span>
                            <span class="badge rounded-pill badge-soft-dark">Dark</span>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Esquema Insignias Ejemplos</h4>
                                    <p class="mb-0 text-muted">Documentación y ejemplos para insignias, nuestro pequeño componente de conteo y etiquetado.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <span class="badge badge-outline-primary">Primario</span>
                            <span class="badge badge-outline-secondary">Secundario</span>
                            <span class="badge badge-outline-success">Success</span>
                            <span class="badge badge-outline-danger">Peligro</span>
                            <span class="badge badge-outline-warning">Advertencia</span>
                            <span class="badge badge-outline-info">Info</span>
                            <span class="badge badge-outline-purple">Morado</span>
                            <span class="badge badge-outline-dark">Dark</span>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplos de insignias de píldoras de contorno</h4>
                                    <p class="mb-0 text-muted">Documentación y ejemplos para insignias, nuestro pequeño componente de conteo y etiquetado.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <span class="badge rounded-pill badge-outline-primary">Primario</span>
                            <span class="badge rounded-pill badge-outline-secondary">Secundario</span>
                            <span class="badge rounded-pill badge-outline-success">Success</span>
                            <span class="badge rounded-pill badge-outline-danger">Peligro</span>
                            <span class="badge rounded-pill badge-outline-warning">Advertencia</span>
                            <span class="badge rounded-pill badge-outline-info">Info</span>
                            <span class="badge rounded-pill badge-outline-pink">Rosado</span>
                            <span class="badge rounded-pill badge-outline-dark">Dark</span>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplos de botones</h4>
                                    <p class="mb-0 text-muted">Las insignias se pueden usar como parte de enlaces o botones para proporcionar un contador.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <button type="button" class="btn btn-primary btn-sm">
                            Notificaciones <span class="badge badge-light">4</span>
                            </button>
                            <button type="button" class="btn btn-secondary btn-sm">
                            Notificaciones <span class="badge badge-light">4</span>
                            </button>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Botones con ejemplos de iconos</h4>
                                    <p class="mb-0 text-muted">Las insignias se pueden usar como parte de enlaces o botones con ícono para proporcionar un contador.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <button type="button" class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm mr-2">
                                <i class="mdi mdi-bell font-16"></i>
                                <span class="badge badge-dot online"></span>
                            </button>
                            <button type="button" class="btn btn-soft-info btn-icon-circle btn-icon-circle-sm mr-2">
                                <i class="mdi mdi-account font-16"></i>
                                <span class="badge badge-dot offline"></span>
                            </button>
                            <button type="button" class="btn btn-soft-warning btn-icon-circle btn-icon-circle-sm mr-2">
                                <i class="mdi mdi-bell font-16"></i>
                                <span class="badge badge-dot online"></span>
                            </button>
                            <button type="button" class="btn btn-soft-danger btn-icon-circle btn-icon-circle-sm">
                                <i class="mdi mdi-account font-16"></i>
                                <span class="badge badge-dot offline"></span>
                            </button>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
