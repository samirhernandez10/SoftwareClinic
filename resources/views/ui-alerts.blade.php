@extends('layouts.master')
@section('title') SoftwareClinic @endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Interfaz de usuario @endslot
            @slot('li_2') Elementos @endslot
            @slot('li_3') Alertas @endslot
            @slot('title') Alertas @endslot
        @endcomponent

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplos de Alertas</h4>
                                    <p class="text-muted mb-0">Proporcione mensajes de retroalimentación contextuales para las acciones típicas de los usuarios con el puñado de mensajes de alerta disponibles y flexibles.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="alert alert-primary border-0" role="alert">
                                <strong>¡Bien hecho!</strong> Ha leído con éxito este importante mensaje de alerta. 😀
                            </div>
                            <div class="alert alert-light border-0" role="alert">
                                <strong>¡Oh, Revisar!</strong> Cambie algunas cosas e intente enviar de nuevo.
                            </div>
                            <div class="alert alert-success border-0" role="alert">
                                <strong>¡Bien hecho!</strong> Has leído con éxito este importante mensaje de alerta.
                            </div>
                            <div class="alert alert-danger border-0" role="alert">
                                <strong>¡Oh, Revisar!</strong> Cambie algunas cosas e intente enviar de nuevo.
                            </div>
                            <div class="alert alert-warning border-0" role="alert">
                                <strong>¡Bien hecho!</strong> Has leído con éxito este importante mensaje de alerta.
                            </div>
                            <div class="alert alert-info border-0  mb-0" role="alert">Una alerta primaria simple con
 <a href="#" class="alert-link">un enlace de ejemplo</a>. Dale un click si te gusta.
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplos de esquemas de alertas</h4>
                                    <p class="text-muted mb-0">Puedes ver esto en acción con una demostración en vivo:</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="alert alert-outline-primary" role="alert">
                                <strong>¡Bien hecho!</strong> Has leído con éxito este importante mensaje de alerta.
                            </div>
                            <div class="alert alert-outline-secondary" role="alert">
                                <strong>¡Oh, Revisar!</strong> Cambia algunas cosas e intenta enviarlo de nuevo.
                            </div>
                            <div class="alert alert-outline-success" role="alert">
                                <strong>¡Bien hecho!</strong> Has leído con éxito este importante mensaje de alerta.
                            </div>
                            <div class="alert alert-outline-danger" role="alert">
                                <strong>¡Oh, Revisar!</strong> Cambia algunas cosas e intenta enviarlo de nuevo.
                            </div>
                            <div class="alert alert-outline-warning" role="alert">
                                <strong>¡Bien hecho!</strong> Has leído con éxito este importante mensaje de alerta.
                            </div>
                            <div class="alert alert-outline-info mb-0" role="alert">
                                <strong>¡Oh, Revisar!</strong> Cambia algunas cosas e intenta enviarlo de nuevo. 🎉
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
                                    <h4 class="card-title">Ejemplos de descarte</h4>
                                    <p class="text-muted mb-0">Puedes ver esto en acción con una demostración en vivo:</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="alert alert-primary alert-dismissible fade show border-0 b-round" role="alert">
                                <strong>¡Bien hecho!</strong> 👍 Has leído con éxito este importante mensaje de alerta.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-light alert-dismissible fade show border-0 mb-0" role="alert">
                                <strong>¡Oh, Revisar!</strong> Cambia algunas cosas e intenta enviarlo de nuevo.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplos de esquemas de descarte</h4>
                                    <p class="text-muted mb-0">Puedes ver esto en acción con una demostración en vivo:</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="alert alert-outline-primary b-round alert-dismissible fade show" role="alert">
                                <strong>¡Bien hecho!</strong> Has leído con éxito este importante mensaje de alerta.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <div class="alert alert-outline-success alert-dismissible d-flex align-items-center mb-0" role="alert">
                                <i class="ti ti-checks alert-icon me-2"></i>
                                <div>
                                    <strong>¡Bien hecho!</strong> Has leído con éxito este importante mensaje de alerta.
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                                    <h4 class="card-title">Ejemplos de alertas personalizadas</h4>
                                    <p class="text-muted mb-0">Puedes ver esto en acción con una demostración en vivo:</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="alert custom-alert custom-alert-primary icon-custom-alert shadow-sm fade show d-flex justify-content-between" role="alert">
                                <div class="media">
                                    <i class="la la-exclamation-triangle alert-icon text-primary align-self-center font-30 me-3"></i>
                                    <div class="media-body align-self-center">
                                        <h5 class="mb-1 fw-bold mt-0">Primario</h5>
                                        <span>¡Oh, Revisar! Cambia algunas cosas e intenta enviarlo de nuevo.</span>
                                    </div>
                                </div>
                                <button type="button" class="btn-close align-self-center" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert custom-alert custom-alert-danger icon-custom-alert shadow-sm fade show d-flex justify-content-between mb-0" role="alert">
                                <div class="media">
                                    <i class="la la-skull-crossbones alert-icon text-danger align-self-center font-30 me-3"></i>
                                    <div class="media-body align-self-center">
                                        <h5 class="mb-1 fw-bold mt-0">Peligro</h5>
                                        <span>¡Oh, Revisar! Cambia algunas cosas e intenta enviarlo de nuevo.</span>
                                    </div>
                                </div>
                                <button type="button" class="btn-close align-self-center" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Contenido adicional</h4>
                                    <p class="text-muted mb-0">Las alertas también pueden contener elementos HTML adicionales como encabezados, párrafos y divisores.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="alert alert-light mb-0" role="alert">
                                <h4 class="alert-heading font-18">¡Bien hecho!</h4>
                                <p>Aww yeah, Has leído con éxito este importante mensaje de alerta. Este texto de ejemplo se extenderá un poco más para que pueda ver cómo funciona el espaciado dentro de una alerta con este tipo de contenido.</p>
                                <p class="mb-0">Siempre que lo necesite, asegúrese de usar utilidades de margen para mantener las cosas ordenadas y ordenadas.</p>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
