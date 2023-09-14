@extends('layouts.master')
@section('title') SoftwareClinic @endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css">
@endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') SoftwareClinic @endslot
            @slot('li_2') Avanzada UI @endslot
            @slot('li_3') Animación @endslot
            @slot('title') Animación @endslot
        @endcomponent
        <body>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <h4 class="page-title">Animación</h4>
                                <h6 class="mb-3 fw-normal text-muted">Animaciones CSS de solo agregar agua.</h6>
                                <div id="animationSandbox">
                                    <div class="shadow-sm p-4 d-inline-block rounded-circle">
                                        <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" class="center-block thumb-xl">
                                    </div>
                                </div>
                            </div>

                            <form class="my-4">
                                <div class="row">
                                    <div class="col-sm-5 mx-auto">
                                        <div class="input-group">
                                            <select class="form-select js--animations" style="width:auto">
                                                <optgroup label="Attention Seekers">
                                                    <option value="bounce">Rebotar</option>
                                                    <option value="flash">Destello</option>
                                                    <option value="pulse">pulse</option>
                                                    <option value="rubberBand">Banda Elástica</option>
                                                    <option value="shake">Agitar</option>
                                                    <option value="swing">Balancearse</option>
                                                    <option value="tada">Tada</option>
                                                    <option value="wobble">Tambalearse</option>
                                                    <option value="jello">Gelatina</option>
                                                </optgroup>

                                                <optgroup label="Bouncing Entrances">
                                                    <option value="bounceIn">Rebotar</option>
                                                    <option value="bounceInDown">Rebotar Hacia Abajo</option>
                                                    <option value="bounceInLeft">Rebotar Hacia Izquierda</option>
                                                    <option value="bounceInRight">Rebotar Hacia Derecha</option>
                                                    <option value="bounceInUp">Rebotar Hacia Arriba</option>
                                                </optgroup>

                                                <optgroup label="Bouncing Exits">
                                                    <option value="bounceOut">Rebotar Fuera</option>
                                                    <option value="bounceOutDown">Rebote Hacia Abajo</option>
                                                    <option value="bounceOutLeft">Rebote Hacia la Izquierda</option>
                                                    <option value="bounceOutRight">Rebote hacia la Derecha</option>
                                                    <option value="bounceOutUp">Rebote hacia  Arriba</option>
                                                </optgroup>

                                                <optgroup label="Fading Entrances">
                                                    <option value="fadeIn">Fundirse</option>
                                                    <option value="fadeInDown">Desvanecerse Hacia Abajo</option>
                                                    <option value="fadeInDownBig">Desvanecerse Abajo Grande</option>
                                                    <option value="fadeInLeft">Desvanecerse a la Izquierda</option>
                                                    <option value="fadeInLeftBig">Desvanecerse en la Izquierda Grande</option>
                                                    <option value="fadeInRight">Desvanecerse a la Derecha</option>
                                                    <option value="fadeInRightBig">fadeInRightBig</option>
                                                    <option value="fadeInUp">Desvanecerse hacia Arriba</option>
                                                    <option value="fadeInUpBig">Desvanecerse Abajo Grande</option>
                                                </optgroup>

                                                <optgroup label="Fading Exits">
                                                    <option value="fadeOut">Desvanecerse</option>
                                                    <option value="fadeOutDown">Desvanecerse abajo</option>
                                                    <option value="fadeOutDownBig">Desvanecerse Abajo Grande</option>
                                                    <option value="fadeOutLeft">Desvanecerse Izquierda</option>
                                                    <option value="fadeOutLeftBig">Desvanecerse Izquierda Grande</option>
                                                    <option value="fadeOutRight">Desvanecerse Derecha</option>
                                                    <option value="fadeOutRightBig">Desvanecerse Derecha Grande</option>
                                                    <option value="fadeOutUp">Desvanecerse Arriba</option>
                                                    <option value="fadeOutUpBig">Desvanecerse Arriba Grande</option>
                                                </optgroup>

                                                <optgroup label="Flippers">
                                                    <option value="flip">voltear</option>
                                                    <option value="flipInX">voltear en X</option>
                                                    <option value="flipInY">voltear en Y</option>
                                                    <option value="flipOutX">Tirón hacia fuera X</option>
                                                    <option value="flipOutY">Tirón hacia fuera Y</option>
                                                </optgroup>

                                                <optgroup label="Lightspeed">
                                                    <option value="lightSpeedIn">Velocidad luz dentro</option>
                                                    <option value="lightSpeedOut">Velocidad luz dentro</option>
                                                </optgroup>

                                                <optgroup label="Rotating Entrances">
                                                    <option value="rotateIn">rotateIn</option>
                                                    <option value="rotateInDownLeft">rotateInDownLeft</option>
                                                    <option value="rotateInDownRight">rotateInDownRight</option>
                                                    <option value="rotateInUpLeft">rotateInUpLeft</option>
                                                    <option value="rotateInUpRight">rotateInUpRight</option>
                                                </optgroup>

                                                <optgroup label="Rotating Exits">
                                                    <option value="rotateOut">rotateOut</option>
                                                    <option value="rotateOutDownLeft">rotateOutDownLeft</option>
                                                    <option value="rotateOutDownRight">rotateOutDownRight</option>
                                                    <option value="rotateOutUpLeft">rotateOutUpLeft</option>
                                                    <option value="rotateOutUpRight">rotateOutUpRight</option>
                                                </optgroup>

                                                <optgroup label="Sliding Entrances">
                                                    <option value="slideInUp">Deslizar hacia Arriba</option>
                                                    <option value="slideInDown">Deslizar hacia abajo</option>
                                                    <option value="slideInLeft">Deslizar hacia la izquierda</option>
                                                    <option value="slideInRight">Deslizar hacia la derecha</option>
                                                </optgroup>

                                                <optgroup label="Sliding Exits">
                                                    <option value="slideOutUp">Deslizarhacia Arriba</option>
                                                    <option value="slideOutDown">Deslizarhacia Abajo</option>
                                                    <option value="slideOutLeft">Deslizarhacia la Izquierda</option>
                                                    <option value="slideOutRight">Deslizarhacia la derecha</option>
                                                </optgroup>

                                                <optgroup label="Zoom Entrances">
                                                    <option value="zoomIn">Acercar</option>
                                                    <option value="zoomInDown">Acercar Abajo</option>
                                                    <option value="zoomInLeft">Acercar Izquierda/option>
                                                    <option value="zoomInRight">Acercar Derecha</option>
                                                    <option value="zoomInUp">Acercar Arriba</option>
                                                </optgroup>

                                                <optgroup label="Zoom Exits">
                                                    <option value="zoomOut">Alejar</option>
                                                    <option value="zoomOutDown">Alejar Abajo</option>
                                                    <option value="zoomOutLeft">Alejar Izquierda</option>
                                                    <option value="zoomOutRight">Alejar Derecha</option>
                                                    <option value="zoomOutUp">Alejar Arriba</option>
                                                </optgroup>

                                                <optgroup label="Specials">
                                                    <option value="hinge">Bisagra</option>
                                                    <option value="jackInTheBox">jackInTheBox</option>
                                                    <option value="rollIn">llegar</option>
                                                    <option value="rollOut">Desenrollar</option>
                                                </optgroup>
                                            </select><!--end form-control-->

                                            <button class="btn btn-primary btn-sm js--triggerAnimation"
                                                    type="button">¡Animame!

                                            </button>
                                        </div><!--end input group-->
                                    </div><!--emd col-->
                                </div><!--end row-->
                            </form><!--end form-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <h4 class="page-title">Animación</h4>
                                <h6 class="mb-3 fw-normal text-muted">Animaciones CSS de solo agregar agua.</h6>
                                <div class="animationSandbox">
                                    <div class="shadow-sm p-4 d-inline-block rounded-circle">
                                        <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" class="center-block thumb-xl">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="row">
                                    <div class="col-lg-6 mx-auto text-center button-list">
                                        <button type="button" class="btn btn-outline-primary btn-sm btn-animation" data-animation="bounce">bounce</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm btn-animation" data-animation="flash">flash</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm btn-animation" data-animation="pulse">pulse</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm btn-animation" data-animation="rubberBand">rubberBand</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm btn-animation" data-animation="shake">shake</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm btn-animation" data-animation="swing">swing</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm btn-animation" data-animation="tada">tada</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm btn-animation" data-animation="wobble">wobble</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm btn-animation" data-animation="flipInY">FlipInY</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm btn-animation" data-animation="jello">Jello</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm btn-animation" data-animation="flipInX">FlipInX</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm btn-animation" data-animation="slideInUp">SlideInUp</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm btn-animation" data-animation="slideInDown">SlideInDown</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm btn-animation" data-animation="slideInLeft">SlideInLeft</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm btn-animation" data-animation="slideInRight">SlideInRight</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm btn-animation" data-animation="zoomIn">ZoomIn</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm btn-animation" data-animation="zoomInUp">ZoomInUp</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm btn-animation" data-animation="zoomInLeft">ZoomInLeft</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm btn-animation" data-animation="zoomInRight">ZoomInRight</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm btn-animation" data-animation="rollIn">RollIn</button>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>
            @include('layouts.vendor-scripts')
           </body>
@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/pages/jquery.animate.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection

