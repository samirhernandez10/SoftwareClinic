@extends('layouts.master')
@section('title') Panel Control @endsection

@section('css')
<link href="{{ URL::asset('assets/plugins/leaflet/leaflet.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/lightpick/lightpick.css') }}" rel="stylesheet" />
@endsection

@section('content')
@component('components.breadcrumb')
@slot('li_1') SoftwareClinic @endslot
@slot('li_2') Paginas @endslot
@slot('li_3') Perfil @endslot
@slot('title') Perfil @endslot
@endcomponent


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body p-0">
                <div id="user_map" class="pro-map" style="height: 220px"></div>
            </div>
            <!--end card-body-->
            <div class="card-body">
                <div class="dastone-profile">
                    <div class="row">
                        <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                            <div class="dastone-profile-main">
                                <div class="dastone-profile-main-pic">
                                    <img src="{{ (isset(Auth::user()->avatar) && Auth::user()->avatar != '') ? asset(Auth::user()->avatar) : asset('/assets/images/users/user-1.jpg') }}" alt="" height="110" class="rounded-circle">
                                    <span class="dastone-profile_main-pic-change" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                        <i class="mdi mdi-pencil"></i>
                                    </span>
                                </div>
                                <div class="dastone-profile_user-detail">
                                    <h5 class="dastone-user-name">{{ Auth::user()->name }}</h5>
                                    <p class="mb-0 dastone-user-name-post">UI/UX Desarrollador, Colombia</p>
                                </div>

                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-4 ms-auto align-self-center">
                            <ul class="list-unstyled personal-detail mb-0">
                                <li class=""><i class="ti ti-mobile me-2 text-secondary font-16 align-middle"></i> <b> Telefono </b> : +57 304 545 4904</li>
                                <li class="mt-2"><i class="ti ti-email text-secondary font-16 align-middle me-2"></i> <b> Email </b> : samirhernandez0000@gmail.com</li>
                                <li class="mt-2"><i class="ti ti-world text-secondary font-16 align-middle me-2"></i> <b> SitioWebs </b> :
                                    <a href="https://mho..com.co" class="font-14 text-primary">https://mho.com.co</a>
                                </li>
                            </ul>

                        </div>
                        <!--end col-->
                        <div class="col-lg-4 align-self-center">
                            <div class="row">
                                <div class="col-auto text-end border-end">
                                    <button type="button" class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm mb-2">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>
                                    <p class="mb-0 fw-semibold">Facebook</p>
                                    <h4 class="m-0 fw-bold">0k <span class="text-muted font-12 fw-normal">Seguidores</span></h4>
                                </div>
                                <!--end col-->
                                <div class="col-auto">
                                    <button type="button" class="btn btn-soft-info btn-icon-circle btn-icon-circle-sm mb-2">
                                        <i class="fab fa-twitter"></i>
                                    </button>
                                    <p class="mb-0 fw-semibold">Twitter</p>
                                    <h4 class="m-0 fw-bold">0k <span class="text-muted font-12 fw-normal">Seguidores</span></h4>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end f_profile-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>

<div class="pb-4">
    <ul class="nav-border nav nav-pills mb-0" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link" id="Profile_Project_tab" data-bs-toggle="pill" href="#Profile_Project">Proyecto</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" id="Profile_Post_tab" data-bs-toggle="pill" href="#Profile_Post">Post</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="portfolio_detail_tab" data-bs-toggle="pill" href="#Profile_Portfolio">Portfolio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="settings_detail_tab" data-bs-toggle="pill" href="#Profile_Settings">Ajustes</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="col-12">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade " id="Profile_Project" role="tabpanel" aria-labelledby="Profile_Project_tab">
                <div class="row mb-4">
                    <div class="col">
                        <form>
                            <div class="input-group">
                                <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
                                <button type="button" class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <button type="button" class="btn btn-primary"><i class="fas fa-filter"></i></button>
                        <button type="button" class="btn btn-primary">Agregar proyecto</button>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body ">
                                <div class="text-center">
                                    <img src="{{ URL::asset('assets/images/widgets/project2.jpg') }}" alt="" class="rounded-circle d-block mx-auto mt-2" height="70">
                                    <h4 class="m-0 fw-semibold text-dark font-16 mt-3">Cuidado del cuerpo</h4>
                                    <p class="text-muted  mb-0 font-13"><span class="text-dark">Cliente : </span>Hyman M. Cruz</p>
                                </div>
                                <div class="row mt-4 d-flex align-items-center">
                                    <div class="col">
                                        <h5 class="font-22 m-0 fw-bold">$0</h5>
                                        <p class="mb-0 text-muted">Presupuesto Total</p>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="btn btn-sm btn-outline-secondary  px-4">Mas Detalles</a>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body ">
                                <div class="text-center">
                                    <img src="{{ URL::asset('assets/images/widgets/project4.jpg') }}" alt="" class="rounded-circle d-block mx-auto mt-2" height="70">
                                    <h4 class="m-0 fw-semibold text-dark font-16 mt-3">Reserva Mi Mundo</h4>
                                    <p class="text-muted  mb-0 font-13"><span class="text-dark">Cliente : </span>Johnson M. delly</p>
                                </div>
                                <div class="row mt-4 d-flex align-items-center">
                                    <div class="col">
                                        <h5 class="font-22 m-0 fw-bold">$0</h5>
                                        <p class="mb-0 text-muted">Presupuesto Total</p>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="btn btn-sm btn-outline-secondary  px-4">Mas Detalles</a>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-3">
                        <div class="card">
                            <div class="card-body ">
                                <div class="text-center">
                                    <img src="{{ URL::asset('assets/images/widgets/project3.jpg') }}" alt="" class="rounded-circle d-block mx-auto mt-2" height="70">
                                    <h4 class="m-0 fw-semibold text-dark font-16 mt-3">Bancaria</h4>
                                    <p class="text-muted  mb-0 font-13"><span class="text-dark">Cliente : </span>Hyman M. Cross</p>
                                </div>
                                <div class="row mt-4 d-flex align-items-center">
                                    <div class="col">
                                        <h5 class="font-22 m-0 fw-bold">$0</h5>
                                        <p class="mb-0 text-muted">Presupuesto Total</p>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="btn btn-sm btn-outline-secondary  px-4">Mas Detalles</a>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body ">
                                <div class="text-center">
                                    <img src="{{ URL::asset('assets/images/widgets/project1.jpg') }}" alt="" class="rounded-circle d-block mx-auto mt-2" height="70">
                                    <h4 class="m-0 fw-semibold text-dark font-16 mt-3">Transferir dinero</h4>
                                    <p class="text-muted  mb-0 font-13"><span class="text-dark">Cliente : </span>Jack Z Jackson</p>
                                </div>
                                <div class="row mt-4 d-flex align-items-center">
                                    <div class="col">
                                        <h5 class="font-22 m-0 fw-bold">$0</h5>
                                        <p class="mb-0 text-muted">Presupuesto Total</p>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="btn btn-sm btn-outline-secondary  px-4">Mas Detalles</a>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body ">
                                <div class="text-center">
                                    <img src="{{ URL::asset('assets/images/widgets/project1.jpg') }}" alt="" class="rounded-circle d-block mx-auto mt-2" height="70">
                                    <h4 class="m-0 fw-semibold text-dark font-16 mt-3">Body Care</h4>
                                    <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Hyman M. Cross</p>
                                </div>
                                <div class="row mt-4 d-flex align-items-center">
                                    <div class="col">
                                        <h5 class="font-22 m-0 fw-bold">$26,100</h5>
                                        <p class="mb-0 text-muted">Total Budget</p>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="btn btn-sm btn-outline-secondary  px-4">More Details</a>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body ">
                                <div class="text-center">
                                    <img src="{{ URL::asset('assets/images/widgets/project3.jpg') }}" alt="" class="rounded-circle d-block mx-auto mt-2" height="70">
                                    <h4 class="m-0 fw-semibold text-dark font-16 mt-3">Book My World</h4>
                                    <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Johnson M. delly</p>
                                </div>
                                <div class="row mt-4 d-flex align-items-center">
                                    <div class="col">
                                        <h5 class="font-22 m-0 fw-bold">$71,100</h5>
                                        <p class="mb-0 text-muted">Total Budget</p>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="btn btn-sm btn-outline-secondary  px-4">More Details</a>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-3">
                        <div class="card">
                            <div class="card-body ">
                                <div class="text-center">
                                    <img src="{{ URL::asset('assets/images/widgets/project4.jpg') }}" alt="" class="rounded-circle d-block mx-auto mt-2" height="70">
                                    <h4 class="m-0 fw-semibold text-dark font-16 mt-3">Banking</h4>
                                    <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Hyman M. Cross</p>
                                </div>
                                <div class="row mt-4 d-flex align-items-center">
                                    <div class="col">
                                        <h5 class="font-22 m-0 fw-bold">$56,700</h5>
                                        <p class="mb-0 text-muted">Total Budget</p>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="btn btn-sm btn-outline-secondary  px-4">More Details</a>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body ">
                                <div class="text-center">
                                    <img src="{{ URL::asset('assets/images/widgets/project2.jpg') }}" alt="" class="rounded-circle d-block mx-auto mt-2" height="70">
                                    <h4 class="m-0 fw-semibold text-dark font-16 mt-3">Transfer money</h4>
                                    <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Jack Z Jackson</p>
                                </div>
                                <div class="row mt-4 d-flex align-items-center">
                                    <div class="col">
                                        <h5 class="font-22 m-0 fw-bold">$48,200</h5>
                                        <p class="mb-0 text-muted">Total Budget</p>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="btn btn-sm btn-outline-secondary  px-4">More Details</a>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end tab-pane-->
            <div class="tab-pane fade show active" id="Profile_Post" role="tabpanel" aria-labelledby="Profile_Post_tab">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body  report-card">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col">
                                                <p class="text-dark mb-1 fw-semibold">Views</p>
                                                <h3 class="my-2 font-24 fw-bold">24k</h3>
                                                <p class="mb-0 text-truncate text-muted"><i class="ti ti-bell text-warning font-18"></i>
                                                    <span class="text-dark fw-semibold">1500</span> New subscribers this week
                                                </p>
                                            </div>
                                            <div class="col-auto align-self-center">
                                                <div class="d-flex justify-content-center align-items-center thumb-xl bg-light-alt rounded-circle mx-auto">
                                                    <i class="ti ti-eye font-30 align-self-center text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body  report-card">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col">
                                                <p class="text-dark mb-1 fw-semibold">Comments</p>
                                                <h3 class="my-2 font-24 fw-bold">24k</h3>
                                                <p class="mb-0 text-truncate text-muted"><i class="ti ti-thumb-up text-success font-18"></i>
                                                    <span class="text-dark fw-semibold">854</span> New Like this week
                                                </p>
                                            </div>
                                            <div class="col-auto align-self-center">
                                                <div class="d-flex justify-content-center align-items-center thumb-xl bg-light-alt rounded-circle mx-auto">
                                                    <i class="ti ti-brand-hipchat font-30 align-self-center text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ URL::asset('assets/images/widgets/1.jpg') }}" alt="" class="img-fluid">
                                <div class="post-title mt-4">
                                    <div class="row">
                                        <div class="col">
                                            <span class="badge badge-soft-primary">Natural</span>
                                        </div>
                                        <!--end col-->
                                        <div class="col-auto">
                                            <span class="text-muted"><i class="far fa-calendar me-1"></i>02 July 2020</span>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->

                                    <h5 href="#" class="font-20 fw-bold d-block mt-3 mb-4">There is nothing more beautiful than nature.</h5>
                                    <span class="font-15 bg-light py-2 px-3 rounded">Taking pictures is savouring life intensely.</span>
                                    <p class="font-15 mt-4">It is a long established fact that a reader will be distracted by the readable content of
                                        a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                        more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                        Many desktop publishing packages and web page editors now use Lorem Ipsum
                                        as their default model text, and a search for 'lorem ipsum' will uncover many
                                        web sites still in their infancy.

                                    </p>
                                    <blockquote class="blockquote border-start ps-4">
                                        <p class="font-18"><i>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</i></p>
                                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                    <p class="font-15">Taking pictures is savouring life intensely, every hundredth of a second – Marc Riboud.
                                        Joy in looking and comprehending is nature's most beautiful gift.</p>
                                    <p class="font-15 mb-0">It is a long established fact that a reader will be distracted by the readable content of
                                        a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                        more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                        Many desktop publishing packages and web page editors now use Lorem Ipsum
                                        as their default model text, and a search for 'lorem ipsum' will uncover many
                                        web sites still in their infancy.

                                    </p>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row mb-3">
                                    <div class="col">
                                        <p class="text-dark fw-semibold mb-0">Artical tags</p>
                                    </div>
                                </div>
                                <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Music</span>
                                <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Animals</span>
                                <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Natural</span>
                                <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Food</span>
                                <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Fashion</span>
                                <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Helth</span>
                                <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Charity</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col">
                                        <p class="text-dark fw-semibold mb-0">Comments (205)</p>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                            <div class="card-body border-bottom-dashed">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <div class="row">
                                            <div class="col-auto">
                                                <img src="{{ URL::asset('assets/images/users/user-2.jpg') }}" alt="" class="thumb-md rounded-circle">
                                            </div>
                                            <!--end col-->
                                            <div class="col">
                                                <div class="comment-body ms-n2 bg-light-alt p-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="text-dark fw-semibold mb-2">Martin Luther</p>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-auto">
                                                            <span class="text-muted"><i class="far fa-clock me-1"></i>30 min ago</span>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                    <p>It is a long established fact that a reader will be distracted by the
                                                        readable content of a page when looking at its layout. The point of
                                                        using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                                                        as opposed to using 'Content here, content here', making it look like readable English.
                                                    </p>
                                                    <a href="#" class="text-primary"><i class="fas fa-reply me-1"></i>Replay</a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                        <ul class="list-unstyled ms-5">
                                            <li>
                                                <div class="row mt-3">
                                                    <div class="col-auto">
                                                        <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" class="thumb-md rounded-circle">
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col">
                                                        <div class="comment-body ms-n2 bg-light-alt p-3">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <p class="text-dark fw-semibold mb-2">Dastone Author</p>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-auto">
                                                                    <span class="text-muted"><i class="far fa-clock me-1"></i>37 min ago</span>
                                                                </div>
                                                                <!--end col-->
                                                            </div>
                                                            <!--end row-->
                                                            <p>It is a long established fact that a reader will be distracted by the
                                                                readable content of a page when looking at its layout.
                                                            </p>
                                                            <p class="mb-0">Thank you</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mt-3">
                                        <div class="row">
                                            <div class="col-auto">
                                                <img src="{{ URL::asset('assets/images/users/user-1.jpg') }}" alt="" class="thumb-md rounded-circle">
                                            </div>
                                            <!--end col-->
                                            <div class="col">
                                                <div class="comment-body ms-n2 bg-light-alt p-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="text-dark fw-semibold mb-2">Joseph Rust</p>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-auto">
                                                            <span class="text-muted"><i class="far fa-clock me-1"></i>40 min ago</span>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                    <p>Is it a long established fact that a reader will be distracted by the
                                                        readable content of a page when looking at its layout?
                                                    </p>
                                                    <a href="#" class="text-primary"><i class="fas fa-reply me-1"></i>Replay</a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </li>
                                    <li class="mt-3">
                                        <div class="row">
                                            <div class="col-auto">
                                                <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt="" class="thumb-md rounded-circle">
                                            </div>
                                            <!--end col-->
                                            <div class="col">
                                                <div class="comment-body ms-n2 bg-light-alt p-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="text-dark fw-semibold mb-2">Matt Rosales</p>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-auto">
                                                            <span class="text-muted"><i class="far fa-clock me-1"></i>40 min ago</span>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                    <p>Is it a long established fact that a reader will be distracted by the
                                                        readable content of a page when looking at its layout?
                                                    </p>
                                                    <a href="#" class="text-primary"><i class="fas fa-reply me-1"></i>Replay</a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                        <ul class="list-unstyled ms-5">
                                            <li>
                                                <div class="row mt-3">
                                                    <div class="col-auto">
                                                        <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" class="thumb-md rounded-circle">
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col">
                                                        <div class="comment-body ms-n2 bg-light-alt p-3">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <p class="text-dark fw-semibold mb-2">Dastone Author</p>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-auto">
                                                                    <span class="text-muted"><i class="far fa-clock me-1"></i>37 min ago</span>
                                                                </div>
                                                                <!--end col-->
                                                            </div>
                                                            <!--end row-->
                                                            <p>It is a long established fact that a reader will be distracted by the
                                                                readable content of a page when looking at its layout.
                                                            </p>
                                                            <p class="mb-0">Thank you</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!--end card-body-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p class="text-dark fw-semibold mb-0">Leave a comment</p>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                            <div class="card-body pt-0">
                                <form>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" id="leave_comment" placeholder="Message"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-end">
                                            <button type="submit" class="btn btn-sm btn-outline-primary px-4">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Popular Posts</h4>
                                    </div>
                                    <!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Today<i class="las la-angle-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Yesterday</a>
                                                <a class="dropdown-item" href="#">Last Week</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <ul class="list-group custom-list-group mb-n3">
                                    <li class="list-group-item align-items-center d-flex justify-content-between">
                                        <div class="media">
                                            <img src="{{ URL::asset('assets/images/small/img-2.jpg') }}" height="40" class="me-3 align-self-center rounded" alt="...">
                                            <div class="media-body align-self-center">
                                                <a href="#" class="m-0 d-block fw-semibold font-13">Dastyle - Admin Dashboard</a>
                                                <a href="#" class="font-12 text-primary">analytic-index</a>
                                            </div>
                                            <!--end media body-->
                                        </div>
                                        <div class="align-self-center">
                                            <span class="text-muted mb-n2">20 June</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center d-flex justify-content-between">
                                        <div class="media">
                                            <img src="{{ URL::asset('assets/images/small/img-1.jpg') }}" height="40" class="me-3 align-self-center rounded" alt="...">
                                            <div class="media-body align-self-center">
                                                <a href="#" class="m-0 d-block fw-semibold font-13">Metrica Simple- Admin Dashboard</a>
                                                <a href="#" class="font-12 text-primary">sales-index</a>
                                            </div>
                                            <!--end media body-->
                                        </div>
                                        <div class="align-self-center">
                                            <span class="text-muted mb-n2">18 june</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center d-flex justify-content-between">
                                        <div class="media">
                                            <img src="{{ URL::asset('assets/images/small/img-4.jpg') }}" height="40" class="me-3 align-self-center rounded" alt="...">
                                            <div class="media-body align-self-center">
                                                <a href="#" class="m-0 d-block fw-semibold font-13">Crovex - Admin Dashboard</a>
                                                <a href="#" class="font-12 text-primary">helpdesk-index</a>
                                            </div>
                                            <!--end media body-->
                                        </div>
                                        <div class="align-self-center">
                                            <span class="text-muted mb-n2">15 june</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center d-flex justify-content-between">
                                        <div class="media">
                                            <img src="{{ URL::asset('assets/images/small/img-5.jpg') }}" height="40" class="me-3 align-self-center rounded" alt="...">
                                            <div class="media-body align-self-center">
                                                <a href="#" class="m-0 d-block fw-semibold font-13">Annex - Admin Dashboard</a>
                                                <a href="#" class="font-12 text-primary">calendar</a>
                                            </div>
                                            <!--end media body-->
                                        </div>
                                        <div class="align-self-center">
                                            <span class="text-muted mb-n2">12 june</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-datepick">
                                    <input type="hidden" id="light_datepick" />
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Social Profile</h4>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <div class="button-list btn-social-icon">
                                    <button type="button" class="btn btn-soft-primary btn-icon-circle">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>

                                    <button type="button" class="btn btn-soft-info btn-icon-circle ms-2">
                                        <i class="fab fa-twitter"></i>
                                    </button>

                                    <button type="button" class="btn btn-soft-pink btn-icon-circle  ms-2">
                                        <i class="fab fa-dribbble"></i>
                                    </button>
                                    <button type="button" class="btn btn-soft-info btn-icon-circle  ms-2">
                                        <i class="fab fa-linkedin-in"></i>
                                    </button>
                                    <button type="button" class="btn btn-soft-danger btn-icon-circle  ms-2">
                                        <i class="fab fa-google-plus-g"></i>
                                    </button>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <div class="tab-pane fade" id="Profile_Portfolio" role="tabpanel" aria-labelledby="portfolio_detail_tab">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="ribbon4 rib4-primary">
                                    <span class="ribbon4-band ribbon4-band-primary text-white text-center">50% off</span>
                                </div>
                                <!--end ribbon-->
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="{{ URL::asset('assets/images/dashboards/dastyle.jpg') }}" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                                    </div>
                                    <!--end col-->
                                    <div class="col align-self-center">
                                        <p class="font-18 fw-semibold mb-2">Dastyle - Admin & Dashboard Template</p>
                                        <p class="text-muted">Dastyle is a Bootstrap 4 admin dashboard,
                                            It is fully responsive and included awesome
                                            features to help build web applications fast and easy.
                                        </p>
                                        <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a>
                                        <a href="#" class="btn btn-soft-primary btn-sm">Download Now</a>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="{{ URL::asset('assets/images/dashboards/metrica.jpg') }}" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                                    </div>
                                    <!--end col-->
                                    <div class="col align-self-center">
                                        <p class="font-18 fw-semibold mb-2">Metrica - Admin & Dashboard Template</p>
                                        <p class="text-muted">Metrica is a Bootstrap 4 admin dashboard,
                                            It is fully responsive and included awesome
                                            features to help build web applications fast and easy.
                                        </p>
                                        <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a>
                                        <a href="#" class="btn btn-soft-primary btn-sm">Download Now</a>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="{{ URL::asset('assets/images/dashboards/crovex.jpg') }}" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                                    </div>
                                    <!--end col-->
                                    <div class="col align-self-center">
                                        <p class="font-18 fw-semibold mb-2">Crovex - Admin & Dashboard Template</p>
                                        <p class="text-muted">Crovex is a Bootstrap 4 admin dashboard,
                                            It is fully responsive and included awesome
                                            features to help build web applications fast and easy.
                                        </p>
                                        <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a>
                                        <a href="#" class="btn btn-soft-primary btn-sm">Download Now</a>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="{{ URL::asset('assets/images/dashboards/frogetor.jpg') }}" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                                    </div>
                                    <!--end col-->
                                    <div class="col align-self-center">
                                        <p class="font-18 fw-semibold mb-2">Frogetor - Admin & Dashboard Template</p>
                                        <p class="text-muted">Frogetor is a Bootstrap 4 admin dashboard,
                                            It is fully responsive and included awesome
                                            features to help build web applications fast and easy.
                                        </p>
                                        <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a>
                                        <a href="#" class="btn btn-soft-primary btn-sm">Download Now</a>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="{{ URL::asset('assets/images/dashboards/metrica.jpg') }}" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                                    </div>
                                    <!--end col-->
                                    <div class="col align-self-center">
                                        <p class="font-18 fw-semibold mb-2">Metrica - Admin & Dashboard Template</p>
                                        <p class="text-muted">Metrica is a Bootstrap 4 admin dashboard,
                                            It is fully responsive and included awesome
                                            features to help build web applications fast and easy.
                                        </p>
                                        <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a>
                                        <a href="#" class="btn btn-soft-primary btn-sm">Download Now</a>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="{{ URL::asset('assets/images/dashboards/dastyle.jpg') }}" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                                    </div>
                                    <!--end col-->
                                    <div class="col align-self-center">
                                        <p class="font-18 fw-semibold mb-2">Dastyle - Admin & Dashboard Template</p>
                                        <p class="text-muted">Dastyle is a Bootstrap 4 admin dashboard,
                                            It is fully responsive and included awesome
                                            features to help build web applications fast and easy.
                                        </p>
                                        <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a>
                                        <a href="#" class="btn btn-soft-primary btn-sm">Download Now</a>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="{{ URL::asset('assets/images/dashboards/frogetor.jpg') }}" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                                    </div>
                                    <!--end col-->
                                    <div class="col align-self-center">
                                        <p class="font-18 fw-semibold mb-2">Frogetor - Admin & Dashboard Template</p>
                                        <p class="text-muted">Frogetor is a Bootstrap 4 admin dashboard,
                                            It is fully responsive and included awesome
                                            features to help build web applications fast and easy.
                                        </p>
                                        <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a>
                                        <a href="#" class="btn btn-soft-primary btn-sm">Download Now</a>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="{{ URL::asset('assets/images/dashboards/crovex.jpg') }}" alt="user" height="150" class="align-self-center mb-3 mb-lg-0">
                                    </div>
                                    <!--end col-->
                                    <div class="col align-self-center">
                                        <p class="font-18 fw-semibold mb-2">Crovex - Admin & Dashboard Template</p>
                                        <p class="text-muted">Crovex is a Bootstrap 4 admin dashboard,
                                            It is fully responsive and included awesome
                                            features to help build web applications fast and easy.
                                        </p>
                                        <a href="#" class="btn btn-soft-primary btn-sm">Live Priview</a>
                                        <a href="#" class="btn btn-soft-primary btn-sm">Download Now</a>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <div class="tab-pane fade" id="Profile_Settings" role="tabpanel" aria-labelledby="settings_detail_tab">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Personal Information</h4>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">First Name</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <input class="form-control" type="text" value="Rosa">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Last Name</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <input class="form-control" type="text" value="Dodson">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Company Name</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <input class="form-control" type="text" value="MannatThemes">
                                        <span class="form-text text-muted font-12">We'll never share your email with anyone else.</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Contact Phone</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="las la-phone"></i></span>
                                            <input type="text" class="form-control" value="+123456789" placeholder="Phone" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Email Address</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="las la-at"></i></span>
                                            <input type="text" class="form-control" value="rosa.dodson@demo.com" placeholder="Email" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Website Link</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="la la-globe"></i></span>
                                            <input type="text" class="form-control" value=" https://mannatthemes.com/" placeholder="Email" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">USA</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <select class="form-select">
                                            <option>London</option>
                                            <option>India</option>
                                            <option>USA</option>
                                            <option>Canada</option>
                                            <option>Thailand</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-9 col-xl-8 offset-lg-3">
                                        <button type="submit" class="btn btn-sm btn-outline-primary">Submit</button>
                                        <button type="button" class="btn btn-sm btn-outline-danger">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-6 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Change Password</h4>
                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Current Password</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <input class="form-control" type="password" placeholder="Password">
                                        <a href="#" class="text-primary font-12">Forgot password ?</a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">New Password</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <input class="form-control" type="password" placeholder="New Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Confirm Password</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <input class="form-control" type="password" placeholder="Re-Password">
                                        <span class="form-text text-muted font-12">Never share your password.</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-9 col-xl-8 offset-lg-3">
                                        <button type="submit" class="btn btn-sm btn-outline-primary">Change Password</button>
                                        <button type="button" class="btn btn-sm btn-outline-danger">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Other Settings</h4>
                            </div>
                            <!--end card-header-->
                            <div class="card-body">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Email_Notifications" checked>
                                    <label class="form-check-label" for="Email_Notifications">
                                        Email Notifications
                                    </label>
                                    <span class="form-text text-muted font-12 mt-0">Do you need them?</span>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="API_Access">
                                    <label class="form-check-label" for="API_Access">
                                        API Access
                                    </label>
                                    <span class="form-text text-muted font-12 mt-0">Enable/Disable access</span>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div> <!-- end col -->
                </div>
                <!--end row-->
            </div>
            <!--end tab-pane-->
        </div>
        <!--end tab-content-->
    </div>
    <!--end col-->
</div>

<div class="modal fade" id="profile-edit" tabindex="-1" aria-labelledby="exampleModalPopoversLabel" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalPopoversLabel">Update Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card">
                <div class="card-body">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data" id="update-profile">
                        @csrf
                        <input type="hidden" value="{{ Auth::user()->id }}" id="data_id">
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ucfirst(Auth::user()->name)}}" name="name" class="form-control @error('name') is-invalid @enderror" id="horizontal-firstname-input">
                                <div class="text-danger" id="nameError"></div>
                            </div>
                        </div><!-- end row -->

                        <div class="row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" value="{{ucfirst(Auth::user()->email)}} @error('email') is-invalid @enderror" class="form-control" id="horizontal-email-input">
                                <div class="text-danger" id="emailError" data-ajax-feedback="email"></div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="mo_number">Mobile Number</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('mobilenumber') is-invalid @enderror" id="mo_number" name="mobilenumber" value="{{ucfirst(Auth::user()->mobilenumber)}}" placeholder="Enter Mobile Number" autofocus>
                                <div class="text-danger" id="mobilenumberError"></div>
                            </div>
                        </div>


                        <div class="row mb-4">
                            <label for="avatar" class="col-sm-3">Profile Picture</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="useravatar" name="avatar" autofocus>
                                    <label class="input-group-text" for="avatar">Upload</label>
                                </div>
                                <div class="text-start mt-2">
                                    <img src="{{ (isset(Auth::user()->avatar) && Auth::user()->avatar != '')  ? asset(Auth::user()->avatar) : asset('/assets/images/users/user-1.jpg') }}" alt="" height="110" class="rounded-circle">
                                </div>
                                <div class="text-danger" role="alert" id="avatarError" data-ajax-feedback="avatar"></div>
                            </div>
                        </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button data-id="{{ Auth::user()->id }}" type="submit" class="btn btn-primary UpdateProfile" id="updateprofile">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('script')


<script>
    $('#update-profile').on('submit', function(event) {
        event.preventDefault();
        var Id = $('#data_id').val();
        let formData = new FormData(this);
        $('#emailError').text('');
        $('#nameError').text('');
        $('#avatarError').text('');
        $('#mobilenumberError').text('');
        $.ajax({
            url: "{{ url('update-profile') }}" + "/" + Id,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#emailError').text('');
                $('#nameError').text('');
                $('#avatarError').text('');
                $('#mobilenumberError').text('');
                if (response.isSuccess == false) {
                    alert(response.Message);
                } else if (response.isSuccess == true) {
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                }
            },
            error: function(response) {
                $('#emailError').text(response.responseJSON.errors.email);
                //$('#nameError').text(response.responseJSON.errors.name);
                $('#avatarError').text(response.responseJSON.errors.avatar);
                $('#mobilenumberError').text(response.responseJSON.errors.mobilenumber);
            }
        });
    });
</script>

<script src="{{ URL::asset('assets/plugins/leaflet/leaflet.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/lightpick/lightpick.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/jquery.profile.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection