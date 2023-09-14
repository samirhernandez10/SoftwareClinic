@extends('layouts.master')
@section('title') SoftwareClinic @endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Interfaz de usuario @endslot
            @slot('li_2') Elementos @endslot
            @slot('li_3') Check & Radio @endslot
            @slot('title') Check & Radio @endslot
        @endcomponent

            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Basico</h4>
                                    <p class="text-muted mb-0">Soporte bootstrap colores de la marca: <code>.checkbox-primary</code>, <code>.checkbox-info</code> etc.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="checkbox">
                                <input id="checkbox0" type="checkbox">
                                <label for="checkbox0">
                                Por defecto
                                </label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox2" type="checkbox" checked="">
                                <label for="checkbox2">
                                    Primary
                                </label>
                            </div>
                            <div class="checkbox checkbox-success">
                                <input id="checkbox3" type="checkbox">
                                <label for="checkbox3">
                                    Success
                                </label>
                            </div>
                            <div class="checkbox checkbox-info">
                                <input id="checkbox4" type="checkbox">
                                <label for="checkbox4">
                                    Info
                                </label>
                            </div>
                            <div class="checkbox checkbox-warning">
                                <input id="checkbox5" type="checkbox" checked="">
                                <label for="checkbox5">
                                    Warning
                                </label>
                            </div>
                            <div class="checkbox checkbox-danger">
                                <input id="checkbox6" type="checkbox" checked="">
                                <label for="checkbox6">
                                    Danger
                                </label>
                            </div>
                            <div class="checkbox checkbox-purple">
                                <input id="checkbox6a" type="checkbox">
                                <label for="checkbox6a">
                                    Purple
                                </label>
                            </div>

                            <div class="checkbox checkbox-pink">
                                <input id="checkbox6b" type="checkbox" checked="">
                                <label for="checkbox6b">
                                    Pink
                                </label>
                            </div>

                            <div class="checkbox checkbox-dark">
                                <input id="checkbox6c" type="checkbox" name="">
                                <label for="checkbox6c">
                                    Inverse
                                </label>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">En un círculo</h4>
                                    <p class="text-muted mb-0">  <code>.checkbox-circle</code> por redondez.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="checkbox checkbox-circle">
                                <input id="checkbox7" type="checkbox">
                                <label for="checkbox7">
                                Simplemente redondeada
                                </label>
                            </div>
                            <div class="checkbox checkbox-info checkbox-circle">
                                <input id="checkbox8" type="checkbox" checked="">
                                <label for="checkbox8">
                                    Info
                                </label>
                            </div>
                            <div class="checkbox checkbox-primary checkbox-circle">
                                <input id="checkbox-9" type="checkbox">
                                <label for="checkbox-9">
                                    Primario
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle">
                                <input id="checkbox-10" type="checkbox" checked="">
                                <label for="checkbox-10">
                                    Success
                                </label>
                            </div>
                            <div class="checkbox checkbox-warning checkbox-circle">
                                <input id="checkbox-11" type="checkbox">
                                <label for="checkbox-11">
                                    Advertencia
                                </label>
                            </div>
                            <div class="checkbox checkbox-danger checkbox-circle">
                                <input id="checkbox-12" type="checkbox" checked="">
                                <label for="checkbox-12">
                                    Peligro
                                </label>
                            </div>

                            <div class="checkbox checkbox-purple checkbox-circle">
                                <input id="checkbox-13" type="checkbox" checked="">
                                <label for="checkbox-13">
                                    Morado
                                </label>
                            </div>

                            <div class="checkbox checkbox-pink checkbox-circle">
                                <input id="checkbox-14" type="checkbox">
                                <label for="checkbox-14">
                                    Rosado
                                </label>
                            </div>

                            <div class="checkbox checkbox-inverse checkbox-circle">
                                <input id="checkbox-15" type="checkbox" checked="">
                                <label for="checkbox-15">
                                    Inverse
                                </label>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->


                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">sin etiqueta</h4>
                                    <p class="text-muted mb-0">Checkboxes sin texto de etiqueta <code>.checkbox-single</code></p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="checkbox checkbox-single mb-2">
                                <input type="checkbox" id="singleCheckbox1" value="option1" aria-label="Single checkbox One">
                                <label></label>
                            </div>
                            <div class="checkbox checkbox-primary checkbox-single">
                                <input type="checkbox" id="singleCheckbox2" value="option2" checked="" aria-label="Single checkbox Two">
                                <label></label>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">En línea checkboxes</h4>
                                    <p class="text-muted mb-0">En línea checkboxes Ejemplos</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="checkbox form-check-inline">
                                <input type="checkbox" id="inlineCheckbox1" value="option1">
                                <label for="inlineCheckbox1"> Inline One </label>
                            </div>
                            <div class="checkbox checkbox-success form-check-inline">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked="">
                                <label for="inlineCheckbox2"> Inline Two </label>
                            </div>
                            <div class="checkbox checkbox-pink form-check-inline">
                                <input type="checkbox" id="inlineCheckbox3" value="option1">
                                <label for="inlineCheckbox3"> Inline Three </label>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Desactivada</h4>
                                    <p class="text-muted mb-0">Desactivada el estado también apoyó.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="checkbox checkbox-success">
                                <input id="checkbox9" type="checkbox" disabled="">
                                <label for="checkbox9">
                                no puedo comprobar esto
                                </label>
                            </div>
                            <div class="checkbox checkbox-success">
                                <input id="checkbox10" type="checkbox" disabled="" checked="">
                                <label for="checkbox10">
                                Esto también
                                </label>
                            </div>
                            <div class="checkbox checkbox-warning checkbox-circle">
                                <input id="checkbox110" type="checkbox" disabled="" checked="">
                                <label for="checkbox110">
                                    Y esto
                                </label>
                            </div>
                            <div class="checkbox checkbox-pink">
                                <input id="checkbox13" type="checkbox" disabled="" checked="">
                                <label for="checkbox13">
                                Esto también

                                </label>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplos básicos de radio</h4>
                                    <p class="text-muted mb-0">Soporta colores de marca bootstrap:<code>.radio-primary</code>, <code>.radio-danger</code> etc.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="radio">
                                <input type="radio" name="radio" id="radio1" value="option1" checked="">
                                <label for="radio1">
                                    Por Defecto
                                </label>
                            </div>
                            <div class="radio radio-primary">
                                <input type="radio" name="radio" id="radio3" value="option3">
                                <label for="radio3">
                                    Primario
                                </label>
                            </div>
                            <div class="radio radio-success">
                                <input type="radio" name="radio" id="radio4" value="option4">
                                <label for="radio4">
                                    Success
                                </label>
                            </div>
                            <div class="radio radio-info">
                                <input type="radio" name="radio" id="radio5" value="option5">
                                <label for="radio5">
                                    Info
                                </label>
                            </div>
                            <div class="radio radio-danger">
                                <input type="radio" name="radio" id="radio6" value="option6">
                                <label for="radio6">
                                    Peligro
                                </label>
                            </div>
                            <div class="radio radio-warning">
                                <input type="radio" name="radio" id="radio7" value="option7">
                                <label for="radio7">
                                    Advertencia
                                </label>
                            </div>
                            <div class="radio radio-purple">
                                <input type="radio" name="radio" id="radio8" value="option8">
                                <label for="radio8">
                                    Morado
                                </label>
                            </div>
                            <div class="radio radio-pink">
                                <input type="radio" name="radio" id="radio9" value="option9">
                                <label for="radio9">
                                    Rosado
                                </label>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Ejemplos básicos de radio</h4>
                                    <p class="text-muted mb-0">Soporta colores de marca bootstrap:
                                    <code>.radio-primary</code>, <code>.radio-danger</code> etc.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="radio">
                                <input type="radio" name="radio1" id="radio11" value="option1" checked="">
                                <label for="radio11">
                                    Por Defecto
                                </label>
                            </div>
                            <div class="radio radio-primary">
                                <input type="radio" name="radio3" id="radio13" value="option3">
                                <label for="radio13">
                                    Primario
                                </label>
                            </div>
                            <div class="radio radio-success">
                                <input type="radio" name="radio4" id="radio14" value="option4" checked="">
                                <label for="radio14">
                                    Success
                                </label>
                            </div>
                            <div class="radio radio-info">
                                <input type="radio" name="radio5" id="radio15" value="option5" checked="">
                                <label for="radio15">
                                    Info
                                </label>
                            </div>
                            <div class="radio radio-danger">
                                <input type="radio" name="radio6" id="radio16" value="option6">
                                <label for="radio16">
                                    Peligro
                                </label>
                            </div>
                            <div class="radio radio-warning">
                                <input type="radio" name="radio7" id="radio17" value="option7" checked="">
                                <label for="radio17">
                                    Advertencia
                                </label>
                            </div>
                            <div class="radio radio-purple">
                                <input type="radio" name="radio8" id="radio18" value="option8">
                                <label for="radio18">
                                    Morado
                                </label>
                            </div>
                            <div class="radio radio-pink">
                                <input type="radio" name="radio9" id="radio19" value="option9" checked="">
                                <label for="radio19">
                                    Rosado
                                </label>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">sin etiqueta</h4>
                                    <p class="text-muted mb-0">Radios sin texto de etiqueta <code>.radio-single</code></p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="radio radio-single mb-2">
                                <input type="radio" id="singleRadio1" value="option1.1" name="radioSingle1" aria-label="Single radio One">
                                <label></label>
                            </div>
                            <div class="radio radio-success radio-single">
                                <input type="radio" id="singleRadio2" value="option2.1" name="radioSingle1" checked="" aria-label="Single radio Two">
                                <label></label>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">En línea  radios</h4>
                                    <p class="text-muted mb-0">En línea radios examples</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="radio radio-info form-check-inline">
                                <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                <label for="inlineRadio1"> Inline One </label>
                            </div>
                            <div class="radio form-check-inline">
                                <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                <label for="inlineRadio2"> Inline Two </label>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Desactivada</h4>
                                    <p class="text-muted mb-0"> Desactivada el estado también apoyó.</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="radio radio-primary">
                                <input type="radio" name="radio31" id="radio51" value="option1" checked="" disabled="">
                                <label for="radio51">
                                    Next
                                </label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="radio41" id="radio61" value="option2" checked="" disabled="">
                                <label for="radio61">
                                    One
                                </label>
                            </div>
                            <div class="radio radio-warning">
                                <input type="radio" name="radio51" id="radio71" value="option3" checked="" disabled="">
                                <label for="radio71">
                                    Next
                                </label>
                            </div>
                            <div class="radio radio-pink">
                                <input type="radio" name="radio61" id="radio81" value="option4" checked="" disabled="">
                                <label for="radio81">
                                    One
                                </label>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

            

@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection

