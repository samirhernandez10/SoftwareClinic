@extends('layouts.master')
@section('title') SoftwareClinic @endsection
    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Panel Control @endslot
            @slot('li_2') Inicio @endslot
            @slot('title')Inicio @endslot
        @endcomponent
        <style>
            body{
                background-image: url('/images/Diseñofondo3.jpg');
                font-family: 'Roboto', Helvetica, sans-serif;
                background-size: cover;
            }
            .card {  border-radius: 20px;
                box-shadow: 0px 5px 6px rgba(0, 0, 0, 0.4);
                margin-left: 10px;

            }
            .card-body{border-radius: 20px;
                margin-left: 10px;
                }
                .carousel-inner{
                    box-shadow: 0px 5px 6px rgba(0, 0, 0, 0.4);
                    border-radius: 20px;
                    background-size: cover;

                }
                .lg-4{
                    box-shadow: 0px 5px 6px rgba(0, 0, 0, 0.4);
                    border-radius: 20px;
                    background-size: cover;
                }
                h1{
                    color:#2F48A7 
                }

        </style>
        <body >
            <div class="row">
                <div class="col-12 justify-content-between rounded">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 lg-4 align-self-left">
                                    <div class="p-4">
                                        <span class="bg-soft-pink p-2 rounded ">Bienvenidos a</span>
                                        <h1>Sotfware Clinic</h1>
                                        <p class="align-self-center font-14 text-muted rounded ">Este software es una herramienta intuitiva y eficiente para la gestión de los procesos clínicos en cualquier tipo de centro médico. 
                                            Con nuestro software, podrás acceder a una plataforma personalizable que te permitirá agilizar y optimizar la atención al paciente, la gestión administrativa y la toma de decisiones gerenciales. 
                                            ¡Estamos seguros de que encontrarás en nuestro software clínico una solución a medida para tu centro médico!</p>
                                        <button type="button" class="btn btn-outline-primary">Empezar</button>
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-8 text-center align-self-center ">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{ URL::asset('assets/images/small/imagenmovil.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ URL::asset('assets/images/small/nuevo2.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ URL::asset('assets/images/small/nuve.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Anterior</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Próxima</span>
                                        </a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>
        </body>
@endsection
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
