@extends('layouts.master')
@section('title') SoftwareClinic @endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Interfaz de usuario @endslot
            @slot('li_2') Elementos @endslot
            @slot('li_3') Lista desplegable @endslot
            @slot('title') Lista desplegable @endslot
        @endcomponent

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Variante</h4>
                                    <p class="text-muted mb-0">La mejor parte es que también puedes hacer esto con cualquier variante de botón.:</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Primario <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Secondary <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Success <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Info <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Warning <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Danger <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Dark <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Light <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                            </div><!-- /button-items -->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Esquema desplegable</h4>
                                    <p class="text-muted mb-0">La mejor parte es que también puedes hacer esto con cualquier variante de botón.:</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Primary <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>

                                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Secondary <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Success <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Warning <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button type="button" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Info <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button type="button" class="btn btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Danger <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Dark <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button type="button" class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Light <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                            </div><!-- /button-items -->
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
                                    <h4 class="card-title">Menús desplegables de botones divididos</h4>
                                    <p class="text-muted mb-0">La mejor parte es que también puedes hacer esto con cualquier variante de botón.:</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary me-0">Primary</button>
                                    <button type="button" class="btn btn-primary dropdown-Alternar menú desplegable-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="sr-only">Alternar menú desplegable</span> <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Accion</a>
                                        <a class="dropdown-item" href="#">Otra Acción</a>
                                        <a class="dropdown-item" href="#">Algo mas aqui</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Enlace separado</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary me-0">Secondary</button>
                                    <button type="button" class="btn btn-secondary dropdown-Alternar menú desplegable-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="sr-only">Alternar menú desplegable</span> <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Accion</a>
                                        <a class="dropdown-item" href="#">Otra Acción</a>
                                        <a class="dropdown-item" href="#">Algo mas aqui</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Enlace separado</a>
                                    </div>
                                </div>
                            </div><!-- /button-items -->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Menús desplegables de botón de contorno dividido</h4>
                                    <p class="text-muted mb-0">La mejor parte es que también puedes hacer esto con cualquier variante de botón.:</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-primary me-0">Primary</button>
                                    <button type="button" class="btn btn-outline-primary dropdown-Alternar menú desplegable-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="sr-only">Alternar menú desplegable</span> <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Accion</a>
                                        <a class="dropdown-item" href="#">Otra Acción</a>
                                        <a class="dropdown-item" href="#">Algo mas aqui</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Enlace separado</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary me-0">Secondary</button>
                                    <button type="button" class="btn btn-outline-secondary dropdown-Alternar menú desplegable-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="sr-only">Alternar menú desplegable</span> <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Accion</a>
                                        <a class="dropdown-item" href="#">Otra Acción</a>
                                        <a class="dropdown-item" href="#">Algo mas aqui</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Enlace separado</a>
                                    </div>
                                </div>
                            </div><!-- /button-items -->
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
                                    <h4 class="card-title">Variant Rounded Circle</h4>
                                    <p class="text-muted mb-0">La mejor parte es que también puedes hacer esto con cualquier variante de botón.:</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-primary btn-round dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Primary <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button type="button" class="btn btn-secondary btn-round dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Secondary <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                            </div><!-- /button-items -->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Outline Rounded Circle Dropdowns</h4>
                                    <p class="text-muted mb-0">La mejor parte es que también puedes hacer esto con cualquier variante de botón.:</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-outline-primary btn-round dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Primary <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button type="button" class="btn btn-outline-secondary btn-round dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Secondary <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                            </div><!-- /button-items -->
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
                                    <h4 class="card-title">Soft Dropdown Examples</h4>
                                    <p class="text-muted mb-0">La mejor parte es que también puedes hacer esto con cualquier variante de botón.:</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-soft-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Primary <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button type="button" class="btn btn-soft-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Secondary <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                            </div><!-- /button-items -->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Squeare Dropdowns Examples</h4>
                                    <p class="text-muted mb-0">La mejor parte es que también puedes hacer esto con cualquier variante de botón.:</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-outline-primary btn-square dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Primary <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button type="button" class="btn btn-outline-secondary btn-square dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Secondary <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                            </div><!-- /button-items -->
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
                                    <h4 class="card-title">Ejemplos de menús desplegables de borde de contorno</h4>
                                    <p class="text-muted mb-0">La mejor parte es que también puedes hacer esto con cualquier variante de botón.:</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-primary btn-square btn-outline-dashed dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Primary <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button type="button" class="btn btn-secondary btn-square btn-outline-dashed dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Secondary <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                            </div><!-- /button-items -->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplos de menús desplegables sesgados</h4>
                                    <p class="text-muted mb-0">La mejor parte es que también puedes hacer esto con cualquier variante de botón.:</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-outline-primary btn-square btn-skew dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><span>Primary</span> <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button type="button" class="btn btn-outline-secondary btn-square btn-skew dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><span>Secondary</span> <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                            </div><!-- /button-items -->
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
                                    <h4 class="card-title">Ejemplos de menús desplegables de tamaño</h4>
                                    <p class="text-muted mb-0">Los menús desplegables de botones funcionan con botones de todos los tamaños, incluidos los botones desplegables predeterminados y divididos.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Large
                                    <i class="mdi mdi-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Default
                                    <i class="mdi mdi-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Small
                                    <i class="mdi mdi-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <button class="btn btn-secondary btn-xs dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Extra Small
                                    <i class="mdi mdi-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                            </div><!-- /button-items -->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplo de menú desplegable único</h4>
                                    <p class="text-muted mb-0">La mejor parte es que también puedes hacer esto con cualquier variante de botón.:</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dropdown">
                                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown button
                                            <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Accion</a>
                                            <a class="dropdown-item" href="#">Otra Acción</a>
                                            <a class="dropdown-item" href="#">Algo mas aqui</a>
                                        </div>
                                    </div>
                                </div><!--emd col-->

                                <div class="col-sm-6">
                                    <div class="dropdown">
                                        <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown link
                                            <i class="mdi mdi-chevron-down"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Accion</a>
                                            <a class="dropdown-item" href="#">Otra Acción</a>
                                            <a class="dropdown-item" href="#">Algo mas aqui</a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
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
                                    <h4 class="card-title">Ejemplos de variaciones desplegables</h4>
                                    <p class="text-muted mb-0">Desencadenar menús desplegables sobre los elementos
                                        añadiendo <code class="highlighter-rouge">.dropup</code> to the parent
                                        element.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items dropup">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Dropup <i class="mdi mdi-chevron-up"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-secondary me-0">
                                        Split dropup
                                    </button>
                                    <button type="button" class="btn btn-secondary dropdown-Alternar menú desplegable-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-chevron-up"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Accion</a>
                                        <a class="dropdown-item" href="#">Otra Acción</a>
                                        <a class="dropdown-item" href="#">Algo mas aqui</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Enlace separado</a>
                                    </div>
                                </div>
                            </div><!-- /button-items -->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplos de variaciones finales</h4>
                                    <p class="text-muted mb-0">Active los menús desplegables a la derecha de los elementos agregando <code>.dropend</code> to the parent element.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items dropend">
                                <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropend <i class="mdi mdi-chevron-right"></i>
                                    </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Enlace separado</a>
                                </div>
                                <div class="btn-group dropend">
                                    <button type="button" class="btn btn-outline-secondary me-0">
                                        Split dropend
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary dropdown-Alternar menú desplegable-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Cambiar a la derecha</span>
                                        <i class="mdi mdi-chevron-right"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Accion</a>
                                        <a class="dropdown-item" href="#">Otra Acción</a>
                                        <a class="dropdown-item" href="#">Algo mas aqui</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Enlace separado</a>
                                    </div>
                                </div>
                            </div><!-- /button-items -->
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
                                    <h4 class="card-title">Alineación del menú</h4>
                                    <p class="text-muted mb-0">Add <code class="highlighter-rouge">.dropdown-menu-end</code>
                                        to a <code class="highlighter-rouge">.dropdown-menu</code> a derecha
                                        alinear el menú desplegable.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                El menú está alineado a la derecha  <i class="mdi mdi-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Accion</a>
                                    <a class="dropdown-item" href="#">Otra Acción</a>
                                    <a class="dropdown-item" href="#">Algo mas aqui</a>
                                </div>
                            </div><!-- /button-items -->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplos de variaciones Dropstart</h4>
                                    <p class="text-muted mb-0">Active los menús desplegables a la derecha de los elementos agregando <code>.dropstart</code> to the parent element.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <div class="btn-group dropstart">
                                    <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-chevron-left"></i> Dropstart
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Accion</a>
                                        <a class="dropdown-item" href="#">Otra Acción</a>
                                        <a class="dropdown-item" href="#">Algo mas aqui</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Enlace separado</a>
                                    </div>
                                </div>

                                    <!-- Split dropstart button -->
                                <div class="btn-group">
                                    <div class="btn-group dropstart" role="group">
                                        <button type="button" class="btn btn-outline-secondary dropdown-Alternar menú desplegable-toggle-split me-0" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Alternar  Dropstart</span>
                                        <i class="mdi mdi-chevron-left"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Accion</a>
                                        <a class="dropdown-item" href="#">Otra Acción</a>
                                        <a class="dropdown-item" href="#">Algo mas aqui</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Enlace separado</a>
                                    </div>
                                    </div>
                                    <button type="button" class="btn btn-outline-secondary">
                                        Split dropstart
                                    </button>
                                </div>
                            </div><!-- /button-items -->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
