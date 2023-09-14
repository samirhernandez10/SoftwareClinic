@extends('layouts.master')
@section('title') SoftwareClinic @endsection

@section('css')
        <link href="{{ URL::asset('assets/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('assets/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css">
@endsection
    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Interaz de Usuario @endslot
            @slot('li_2') Avanzada UI @endslot
            @slot('li_3') Dulces Alertas @endslot
            @slot('title') Dulces Alertas @endslot
        @endcomponent

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ejemplos</h4>
                            <p class="text-muted mb-0">Un hermoso, receptivo, personalizable
                                y reemplazo accesible (WAI-ARIA) para los cuadros emergentes de JavaScript. Cero
                                dependencias
                            </p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <tbody>
                                        <tr class="border-0">
                                            <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-pink"></i>Un mensaje básico</td>
                                            <td class="border-0"><button type="button" class="btn btn-outline-primary btn-sm waves-effect waves-light" id="sa-basic">Haz click</button></td>
                                        </tr>
                                        <tr class="border-0">
                                            <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-success"></i>Un título con un texto debajo</td>
                                            <td class="border-0"><button type="button" class="btn btn-outline-primary btn-sm waves-effect waves-light" id="sa-title">Haz click</button></td>
                                        </tr>
                                        <tr class="border-0">
                                            <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-warning"></i>¡Un mensaje de éxito!</td>
                                            <td class="border-0"><button type="button" class="btn btn-outline-primary btn-sm waves-effect waves-light" id="sa-success">Haz click</button></td>
                                        </tr>
                                        <tr class="border-0">
                                            <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-dark"></i>Un cuadro de diálogo posicionado personalizado</td>
                                            <td class="border-0"><button type="button" class="btn btn-outline-primary btn-sm waves-effect waves-light" id="sa-topright-success">Haz click</button></td>
                                        </tr>
                                        <tr class="border-0">
                                            <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-pink"></i>Animación personalizada </td>
                                            <td class="border-0"><button type="button" class="btn btn-outline-primary btn-sm waves-effect waves-light" id="sa-custom-animation">Haz click</button></td>
                                        </tr>
                                        <tr class="border-0">
                                            <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-info"></i>Un mensaje con encabezado de imagen personalizado</td>
                                            <td class="border-0"><button type="button" class="btn btn-outline-primary btn-sm waves-effect waves-light" id="sa-image">Haz click</button></td>
                                        </tr>
                                        <tr class="border-0">
                                            <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-primary"></i>Ejemplo de solicitud de Ajax</td>
                                            <td class="border-0"><button type="button" class="btn btn-outline-primary btn-sm waves-effect waves-light" id="ajax-alert">Haz click</button></td>
                                        </tr>
                                        <tr class="border-0">
                                            <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-secondary"></i>Ejemplo de encadenamiento de modales (cola)</td>
                                            <td class="border-0"><button type="button" class="btn btn-outline-primary btn-sm waves-effect waves-light" id="chaining-alert">Haz click</button></td>
                                        </tr>
                                        <tr class="border-0">
                                            <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-danger"></i>Un mensaje con temporizador de cierre automático</td>
                                            <td class="border-0"><button type="button" class="btn btn-outline-primary btn-sm waves-effect waves-light" id="sa-auto-close">Haz click</button></td>
                                        </tr>
                                        <tr class="border-0">
                                            <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-purple"></i>Botones y descripción HTML personalizada</td>
                                            <td class="border-0"><button type="button" class="btn btn-outline-primary btn-sm waves-effect waves-light" id="custom-htms-alert">Haz click</button></td>
                                        </tr>
                                        <tr class="border-0">
                                            <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-success"></i>Al pasar un parámetro, puede ejecutar algo más para "Cancelar".</td>
                                            <td class="border-0"><button type="button" class="btn btn-outline-primary btn-sm waves-effect waves-light" id="sa-params">Haz click</button></td>
                                        </tr>
                                        <tr class="border-0">
                                            <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-warning"></i>Un mensaje de advertencia, con una función adjunta al botón "Confirmar"...</td>
                                            <td class="border-0"><button type="button" class="btn btn-outline-primary btn-sm waves-effect waves-light" id="sa-warning">Haz click</button></td>
                                        </tr>
                                        <tr class="border-0">
                                            <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-info"></i>Un mensaje con ancho, relleno y fondo personalizados</td>
                                            <td class="border-0"><button type="button" class="btn btn-outline-primary btn-sm waves-effect waves-light" id="custom-padding-width-alert">Haz click</button></td>
                                        </tr>
                                        <tr class="border-0">
                                            <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-pink"></i>Ejemplo de cola dinámica</td>
                                            <td class="border-0"><button type="button" class="btn btn-outline-primary btn-sm waves-effect waves-light" id="dynamic-alert">Haz click</button></td>
                                        </tr>
                                        <tr class="border-0">
                                            <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-pink"></i>Un modal con un título, un icono de error, un texto y un pie de págin</td>
                                            <td class="border-0"><button type="button" class="btn btn-outline-primary btn-sm waves-effect waves-light" id="sa-footer">Haz click</button></td>
                                        </tr>
                                        <tr class="border-0">
                                            <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-warning"></i>Ejemplo de mezcla</td>
                                            <td class="border-0"><button type="button" class="btn btn-outline-primary btn-sm waves-effect waves-light" id="sa-mixin">Haz click</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!--table responsive-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!-- end col -->
            </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.sweet-alert.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
