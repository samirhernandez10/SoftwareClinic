@extends('layouts.master')
@section('title') SoftwareClinic @endsection

    @section('content')
        @component('components.breadcrumb')
             @slot('li_1') Interfaz de usuario @endslot
            @slot('li_2') Elementos @endslot
            @slot('li_3') Botones @endslot
            @slot('title') Botones @endslot
        @endcomponent

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplos</h4>
                                    <p class="text-muted mb-0">Bootstrap incluye seis estilos de botón predefinidos, cada uno con su propio propósito semántico.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-primary">Primario</button>

                                <button type="button" class="btn btn-secondary">Secundario</button>

                                <button type="button" class="btn btn-success">Success</button>

                                <button type="button" class="btn btn-warning">Advertencia</button>

                                <button type="button" class="btn btn-info">Info</button>

                                <button type="button" class="btn btn-danger">Peligro</button>

                                <button type="button" class="btn btn-dark">Dark</button>

                                <button type="button" class="btn btn-light">Light</button>

                                <button type="button" class="btn btn-link">Link</button>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Botones de esquema</h4>
                                    <p class="text-muted mb-0">Bootstrap incluye seis estilos de botón predefinidos, cada uno con su propio propósito semántico.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-outline-primary">Primario</button>

                                <button type="button" class="btn btn-outline-secondary">Secundario</button>

                                <button type="button" class="btn btn-outline-success">Success</button>

                                <button type="button" class="btn btn-outline-info">Info</button>

                                <button type="button" class="btn btn-outline-warning">Advertencia</button>

                                <button type="button" class="btn btn-outline-danger">Peligro</button>

                                <button type="button" class="btn btn-outline-dark">Dark</button>

                                <button type="button" class="btn btn-outline-purple">Morado</button>

                                <button type="button" class="btn btn-outline-pink">Rosa</button>
                            </div>
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
                                    <h4 class="card-title">Ejemplos de iconos</h4>
                                    <p class="text-muted mb-0">Bootstrap incluye seis estilos de botón predefinidos, cada uno con su propio propósito semántico.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-primary"><i class="mdi mdi-check-all me-2"></i>Primario</button>
                                <button type="button" class="btn btn-secondary"><i class="mdi mdi-alert-outline me-2"></i>Secundario</button>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplos de iconos de contorno</h4>
                                    <p class="text-muted mb-0">Bootstrap incluye seis estilos de botón predefinidos, cada uno con su propio propósito semántico.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-outline-primary"><i class="mdi mdi-send me-2"></i>Primario</button>
                                <button type="button" class="btn btn-outline-secondary"><i class="mdi mdi-power me-2"></i>Secundario</button>
                            </div>
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
                                    <h4 class="card-title">Ejemplos de botones redondos</h4>
                                    <p class="text-muted mb-0">Bootstrap incluye seis estilos de botón predefinidos, cada uno con su propio propósito semántico.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-primary btn-round">Primario</button>
                                <button type="button" class="btn btn-secondary btn-round">Secundario</button>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplos de botones de contorno redondo</h4>
                                    <p class="text-muted mb-0">Bootstrap incluye seis estilos de botón predefinidos, cada uno con su propio propósito semántico.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-outline-primary btn-round">Primario</button>
                                <button type="button" class="btn btn-outline-secondary btn-round">Secundario</button>
                            </div>
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
                                    <h4 class="card-title">Ejemplos de botones programables</h4>
                                    <p class="text-muted mb-0">Bootstrap incluye seis estilos de botón predefinidos, cada uno con su propio propósito semántico.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-soft-primary">Primario</button>
                                <button type="button" class="btn btn-soft-secondary">Secundario</button>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplos de botones cuadrados</h4>
                                    <p class="text-muted mb-0">Bootstrap incluye seis estilos de botón predefinidos, cada uno con su propio propósito semántico.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-outline-primary btn-square">Primario</button>
                                <button type="button" class="btn btn-outline-secondary btn-square">Secundario</button>
                            </div>
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
                                    <h4 class="card-title">Ejemplos de botones de borde de contorno</h4>
                                    <p class="text-muted mb-0">Botones de borde de contorno personalizados de lujo en solo estilo cuadrado.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-primary btn-square btn-outline-dashed">Primario</button>
                                <button type="button" class="btn btn-secondary btn-square btn-outline-dashed">Secundario</button>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplos de botones sesgados</h4>
                                    <p class="text-muted mb-0">Botones sesgados personalizados de lujo.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-outline-primary btn-square btn-skew"><span>Primario</span></button>
                                <button type="button" class="btn btn-outline-secondary btn-square btn-skew"><span>Secundario</span></button>
                            </div>
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
                                    <h4 class="card-title">Botones con etiqueta diferente</h4>
                                    <p class="text-muted mb-0">Bootstrap incluye seis estilos de botón predefinidos, cada uno con su propio propósito semántico.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button class="btn btn-primary" type="submit">Crear</button>
                                <input class="btn btn-secondary" type="submit" value="Submit">
                                <input class="btn btn-warning" type="button" value="Input">
                                <input class="btn btn-dark" type="reset" value="Reset">
                                <a class="btn btn-light" href="#" role="button">Link</a>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplos de botones deshabilitados</h4>
                                    <p class="text-muted mb-0">Haga que los botones parezcan inactivos agregando el atributo booleano deshabilitado a cualquier <code>&lt;botón&gt;</code> elemento.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-primary" disabled="">Desactivar</button>
                                <button type="button" class="btn btn-outline-secondary" disabled="">Desactivar</button>
                            </div>
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
                                    <h4 class="card-title">Ejemplos de tamaños de botones</h4>
                                    <p class="text-muted mb-0">Se agregaron nuevos botones más grandes o más pequeños
                                        <code class="highlighter-rouge">.btn-xl</code> o <code class="highlighter-rouge">.btn-sm</code> por tamaño adicionales.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-primary btn-lg">Botón grande</button>
                                <button type="button" class="btn btn-primary">Botón predeterminado</button>
                                <button type="button" class="btn btn-secondary btn-sm">Botón pequeño</button>
                                <button type="button" class="btn btn-secondary btn-xs">Extra pequeño</button>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Checkbox y botones de radio</h4>
                                    <p class="text-muted mb-0">Bootstrap’s checkbox o radio botón de estilo.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">

                            <div class="btn-group mb-2 mb-lg-0" role="group" aria-label="Basic checkbox toggle button group">
                                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>

                                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>

                                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
                                </div>


                            <div class="btn-group float-end" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                <label class="btn btn-outline-secondary" for="btnradio1">Radio 1</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btnradio2">Radio 2</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btnradio3">Radio 3</label>
                            </div>
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
                                    <h4 class="card-title">Solo ejemplos de botones de iconos</h4>
                                    <p class="text-muted mb-0">Una variante de botón para usar solo íconos. Agregar <code>.btn-icon-square</code></p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-primary btn-icon-square-sm"><i class="fab fa-facebook-f"></i></button>
                                <button type="button" class="btn btn-info btn-icon-square-sm"><i class="fab fa-twitter"></i></button>
                                <button type="button" class="btn btn-pink btn-icon-square-sm"><i class="fab fa-dribbble"></i></button>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplos de botones circulares de iconos</h4>
                                    <p class="text-muted mb-0">Una variante de botón para usar solo íconos. Agregar <code>.btn-icon-circle</code></p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="button-items">
                                <button type="button" class="btn btn-outline-info btn-icon-circle btn-icon-circle-sm"><i class="fab fa-skype"></i></button>
                                <button type="button" class="btn btn-outline-danger btn-icon-circle btn-icon-circle-sm"><i class="fab fa-pinterest"></i></button>
                                <button type="button" class="btn btn-outline-dark btn-icon-circle btn-icon-circle-sm"><i class="fab fa-github"></i></button>
                            </div>
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
                                    <h4 class="card-title">Ejemplos de botones de bloque</h4>
                                    <p class="text-muted mb-0">Cree botones de nivel de bloque, aquellos que
                                        abarcar todo el ancho de un padre, agregando <code class="highlighter-rouge">.d-grid</code>.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <button type="button" class="btn btn-secondary">Block level button</button>
                                <button type="button" class="btn btn-outline-purple btn-lg">Block level button</button>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplos de grupos de botones</h4>
                                    <p class="text-muted mb-0">Agrupe una serie de botones en una sola línea con el grupo de botones y aliméntelos con JavaScript.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <div class="btn-group-vertical">
                                            <button type="button" class="btn btn-primary">Button 1</button>
                                            <button type="button" class="btn btn-primary">Button 2</button>
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Button 3 <span class="caret"></span> </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-outline-secondary"><i class="fa fa-align-left"></i></button>
                                            <button type="button" class="btn btn-outline-secondary"><i class="fa fa-align-center"></i></button>
                                            <button type="button" class="btn btn-outline-secondary"><i class="fa fa-align-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="btn-group" aria-label="Basic example" role="group">
                                            <button type="button" class="btn btn-outline-secondary"><i class="mdi mdi-play"></i></button>
                                            <button type="button" class="btn btn-outline-primary active"><i class="mdi mdi-pause"></i></button>
                                            <button type="button" class="btn btn-outline-secondary"><i class="mdi mdi-stop"></i></button>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-outline-secondary">Izquierda</button>
                                            <button type="button" class="btn btn-outline-secondary">Medio</button>
                                            <button type="button" class="btn btn-outline-secondary">Derecha</button>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-secondary">1</button>
                                            <button type="button" class="btn btn-outline-secondary">2</button>
                                            <button type="button" class="btn btn-primary active">3</button>
                                            <button type="button" class="btn btn-outline-secondary">4</button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-secondary">5</button>
                                            <button type="button" class="btn btn-primary active">6</button>
                                            <button type="button" class="btn btn-outline-secondary">7</button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-secondary">8</button>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
