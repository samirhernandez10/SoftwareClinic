@extends('layouts.master')
@section('title') SoftwareClinic @endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Interfaz de usuario @endslot
            @slot('li_2') Elementos @endslot
            @slot('li_3') Avatar @endslot
            @slot('title') Avatar @endslot
        @endcomponent

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Avatar</h4>
                                    <p class="text-muted mb-0">Ejemplo de usuario único</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col">
                                    <div class="media">
                                        <a class="" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-8.jpg') }}" alt="user" class="rounded-circle thumb-lg">
                                        </a>
                                        <div class="media-body align-self-center ms-2">
                                            <p class="font-14 font-weight-semibold mb-0">Kenny Hernandez</p>
                                            <p class="mb-0 font-12 text-muted">sistemas@mho.com.co</p>
                                        </div>
                                    </div><!--end media-->
                                </div><!--end col-->
                                <div class="col-auto align-self-center">
                                    <div class="button-items">
                                        <button type="button" class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"><i class="fab fa-facebook-f"></i></button>
                                        <button type="button" class="btn btn-outline-info btn-icon-circle btn-icon-circle-sm"><i class="fab fa-twitter"></i></button>
                                        <button type="button" class="btn btn-outline-pink btn-icon-circle btn-icon-circle-sm"><i class="fab fa-youtube"></i></button>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Avatar de grupo</h4>
                                    <p class="text-muted mb-0">Ejemplo de usuario de grupo</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col">
                                    <div class="img-group">
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-8.jpg') }}" alt="user" class="thumb-lg rounded-circle">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt="user" class="thumb-lg rounded-circle">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-4.jpg') }}" alt="user" class="thumb-lg rounded-circle">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-6.jpg') }}" alt="user" class="thumb-lg rounded-circle">
                                        </a>
                                        <a href="" class="avatar-box thumb-md align-self-center">
                                            <span class="avatar-title bg-soft-info rounded-circle font-weight-normal"><i class="las la-plus"></i></span>
                                        </a>
                                    </div><!--end img-group-->
                                </div><!--end col-->
                                <div class="col-auto align-self-center">
                                    <button type="button" class="btn btn-outline-light btn-sm">Mensaje</button>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Avatar con insignia</h4>
                                    <p class="text-muted mb-0">Usuario único con ejemplo de placa</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col">
                                    <div class="img-group">
                                        <a class="user-avatar me-1" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-8.jpg') }}" alt="user" class="rounded-circle thumb-lg">
                                            <span class="avatar-badge online"></span>
                                        </a>
                                        <a class="user-avatar me-1" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt="user" class="rounded-circle thumb-lg">
                                            <span class="avatar-badge offline"></span>
                                        </a>
                                        <a class="user-avatar me-1" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-4.jpg') }}" alt="user" class="rounded-circle thumb-lg">
                                            <span class="avatar-badge online"></span>
                                        </a>
                                    </div><!--end img-group-->
                                </div><!--end col-->
                                <div class="col-auto align-self-center">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i data-feather="more-horizontal" class="align-self-center text-muted icon-xs"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">New Group</a>
                                            <a class="dropdown-item" href="#">Settings</a>
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
                                    <h4 class="card-title">Icon Avatar</h4>
                                    <p class="text-muted mb-0">Icono de avatar de forma redonda en el ejemplo de color del tema</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="media">
                                <div class="avatar-box thumb-xxl align-self-center me-2">
                                    <span class="avatar-title bg-primary rounded-circle"><i class="far fa-grin-alt"></i></span>
                                </div>
                                <div class="avatar-box thumb-xl align-self-center me-2">
                                    <span class="avatar-title bg-secondary rounded-circle"><i class="far fa-grin-alt"></i></span>
                                </div>
                                <div class="avatar-box thumb-lg align-self-center me-2">
                                    <span class="avatar-title bg-warning rounded-circle"><i class="far fa-user"></i></span>
                                </div>
                                <div class="avatar-box thumb-md align-self-center me-2">
                                    <span class="avatar-title bg-danger rounded-circle"><i class="fab fa-mailchimp"></i></span>
                                </div>
                                <div class="avatar-box thumb-sm align-self-center me-2">
                                    <span class="avatar-title bg-purple rounded-circle"><i class="fas fa-user"></i></span>
                                </div>
                                <div class="avatar-box thumb-xs align-self-center">
                                    <span class="avatar-title bg-dark rounded-circle"><i class="fas fa-smile"></i></span>
                                </div>
                            </div><!--end media-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Icon Avatar</h4>
                                    <p class="text-muted mb-0">Icono de avatar de forma cuadrada en el ejemplo de color del tema</p>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="media">
                                <div class="avatar-box thumb-xxl align-self-center me-2">
                                    <span class="avatar-title bg-primary rounded"><i class="fas fa-user"></i></span>
                                </div>
                                <div class="avatar-box thumb-xl align-self-center me-2">
                                    <span class="avatar-title bg-secondary rounded"><i class="far fa-grin-alt"></i></span>
                                </div>
                                <div class="avatar-box thumb-lg align-self-center me-2">
                                    <span class="avatar-title bg-warning rounded"><i class="far fa-user"></i></span>
                                </div>
                                <div class="avatar-box thumb-md align-self-center me-2">
                                    <span class="avatar-title bg-danger rounded"><i class="fab fa-mailchimp"></i></span>
                                </div>
                                <div class="avatar-box thumb-sm align-self-center me-2">
                                    <span class="avatar-title bg-purple rounded"><i class="fas fa-user"></i></span>
                                </div>
                                <div class="avatar-box thumb-xs align-self-center">
                                    <span class="avatar-title bg-dark rounded"><i class="fas fa-smile"></i></span>
                                </div>
                            </div><!--end media-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

@endsection
@section('script')
        <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
