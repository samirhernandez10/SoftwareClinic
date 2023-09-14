@extends('layouts.master')
@section('title') SoftwareClinic @endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Interfaz de usuario @endslot
            @slot('li_2') Elementos @endslot
            @slot('li_3') Tarjetas @endslot
            @slot('title') Tarjetas @endslot
        @endcomponent

            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top img-fluid bg-light-alt" src="{{ URL::asset('assets/images/small/img-2.jpg') }}" alt="Card image cap">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Título de la tarjeta</h4>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <img class="rounded-circle" src="{{ URL::asset('assets/images/users/user-7.jpg') }}" alt="" height="24">
                                    <span class="badge badge-outline-light">30 May 2023</span>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <p class="card-text text-muted ">Un texto de ejemplo rápido para construir sobre el título de la tarjeta y componer la mayor parte del contenido de la tarjeta.</p>
                            <a href="#" class="btn btn-primary btn-sm">vamos</a>
                        </div><!--end card -body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Cuerpo de la tarjeta</h4>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="card-body border">
                                <p class="card-subtitle font-14 mb-2">este es el subtitulo de la carta</p>
                                <p class="card-text text-muted">SomEl ejemplo rápido envía un mensaje de texto con la mayor parte del contenido de la tarjeta.
                                    Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con lo legible
                                    contenido.
                                </p>
                            </div>
                        </div><!--end card -body-->
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Títulos, texto y enlaces</h4>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <h6 class="card-subtitle font-14 mb-2 font-weight-normal">este es el subtitulo de la carta</h6>
                            <p class="card-text text-muted">Un texto de ejemplo rápido para construir sobre el título de la tarjeta y componer la mayor parte del contenido de la tarjeta.</p>
                            <a href="#" class="card-link text-primary">Enlace de la tarjeta</a>
                            <a href="#" class="card-link text-primary">Otro enlace</a>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Fregadero</h4>
                        </div><!--end card-header-->
                        <div class="card-body pb-0">
                            <p class="mb-0 text-muted font-13">Un texto de ejemplo rápido para construir sobre el título de la tarjeta y componer la mayor parte del contenido de la tarjeta.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">enlace de la tarjeta</a>
                            <a href="#" class="card-link">Otro Link</a>
                        </div><!--end card -body-->
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h4 class="card-title text-white">Header - Primario</h4>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <p class="card-text text-muted">Un texto de ejemplo rápido para construir sobre el título de la tarjeta y componer la mayor parte del contenido de la tarjeta.</p>
                        </div><!--end card-body-->
                        <p class="card-footer bg-light-alt m-0">Footer - 2023 Metrica</p>
                    </div><!--end card-->

                </div><!--end col-->
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <blockquote class="card-bodyquote mb-0">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                    erat a amet, consectetur adipiscing elit ante.</p>
                                <footer class="blockquote-footer font-14">
                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                </footer>
                            </blockquote>
                        </div><!--end card-body-->
                    </div><!--end card-->

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">List Group</h4>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <ul class="list-group list-group-flush border">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-3 align-self-center text-center">
                                <img class="" height="80" src="{{ URL::asset('assets/images/widgets/btc.png') }}" alt="Card image">
                            </div>
                            <div class="col-md-9">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h4 class="card-title">Título de la tarjeta</h4>
                                        </div><!--end col-->
                                        <div class="col-auto">
                                            <img class="rounded-circle" src="{{ URL::asset('assets/images/users/user-7.jpg') }}" alt="" height="24">
                                            <span class="badge badge-outline-light">30 May 2023</span>
                                        </div><!--end col-->
                                    </div>  <!--end row-->
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <p class="card-text">Esta es una tarjeta más amplia con texto de apoyo a continuación como introducción natural
                                        er tarjeta con texto de apoyo a continuación como una introducción natural al contenido adicional.</p>
                                    <p class="card-text"><small class="text-muted">Última actualización hace 3 minutos</small></p>
                                </div><!--end card-body-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <h5 class="card-title mb-2">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-9">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h4 class="card-title">Card title</h4>
                                        </div><!--end col-->
                                        <div class="col-auto">
                                            <img class="rounded-circle" src="{{ URL::asset('assets/images/users/user-7.jpg') }}" alt="" height="24">
                                            <span class="badge badge-outline-light">30 May 2020</span>
                                        </div><!--end col-->
                                    </div>  <!--end row-->
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                        er card with supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div><!--end card-body-->
                            </div><!--end col-->
                            <div class="col-md-3 align-self-center text-center">
                                <img class="" height="80" src="{{ URL::asset('assets/images/widgets/btc.png') }}" alt="Card image">
                            </div>
                        </div><!--end row-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Special title treatment</h4>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <p class="card-text text-muted ">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="card-header">
                            <h4 class="card-title">Special title treatment</h4>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <p class="card-text text-muted ">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-4">
                    <div class="card text-end">
                        <div class="card-header">
                            <h4 class="card-title">Special title treatment</h4>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <p class="card-text text-muted ">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

           

@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
