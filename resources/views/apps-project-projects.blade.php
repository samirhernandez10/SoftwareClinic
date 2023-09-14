@extends('layouts.master')
@section('title') Dashboard @endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Dastone @endslot
            @slot('li_2') Projects @endslot
            @slot('li_3') Projects @endslot
            @slot('title') Projects @endslot
        @endcomponent

        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <h5 class="mt-0">Here the list of all continu projects. <span class="badge badge-pink">6</span></h5>
                    </li>
                </ul>
            </div><!--end col-->

            <div class="col-lg-6 text-end">
                <div class="text-end">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <div class="input-group">
                                <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control form-control-sm" placeholder="Search">
                                <button type="button" class="btn btn-soft-primary btn-sm"><i class="fas fa-search"></i></button>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <button type="button" class="btn btn-soft-primary btn-sm"><i class="fas fa-filter"></i></button>
                        </li>
                        <li class="list-inline-item">
                            <button type="button" class="btn btn-soft-primary btn-sm">Add New Project</button>
                        </li>
                    </ul>
                </div>
            </div><!--end col-->
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="media mb-3">
                            <img src="{{ URL::asset('assets/images/widgets/project2.jpg') }}" alt="" class="thumb-md rounded-circle">
                            <div class="media-body align-self-center text-truncate ms-3">
                                <h4 class="m-0 fw-semibold text-dark font-15">Banking</h4>
                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Hyman M. Cross</p>
                            </div><!--end media-body-->
                        </div>
                        <hr class="hr-dashed">
                        <div class="d-flex justify-content-between mb-3">
                            <h6 class="fw-semibold m-0">Start : <span class="text-muted fw-normal"> 15 Nov 2020</span></h6>
                            <h6 class="fw-semibold m-0">Deadline : <span class="text-muted fw-normal"> 28 Fab 2021</span></h6>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <h5 class="font-16 m-0 fw-bold">$56,800</h5>
                                    <p class="mb-0 fw-semibold">Total Budget</p>
                                </div>
                            </div><!--end col-->
                            <div class="col-auto align-self-center">
                                <h5 class="font-14 m-0 fw-bold">$22,100 <span class="font-12 text-muted fw-normal">Used Budget</span></h5>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div>
                            <p class="text-muted mt-2 mb-1">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form.
                            </p>
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-semibold">All Hours : <span class="text-muted fw-normal"> 530 / 281:30</span></h6>
                                <h6 class="fw-semibold">Today : <span class="text-muted fw-normal"> 2:45</span><span class="badge badge-soft-pink fw-semibold ms-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                            </div>
                            <p class="text-muted text-end mb-1">15% Complete</p>
                            <div class="progress mb-4" style="height: 4px;">
                                <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="img-group">
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-6.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-2.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-3.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-4.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a href="" class="avatar-box thumb-xxs align-self-center">
                                        <span class="avatar-title bg-soft-info rounded-circle font-13 fw-normal">+6</span>
                                    </a>
                                </div><!--end img-group-->
                                <ul class="list-inline mb-0 align-self-center">
                                    <li class="list-item d-inline-block me-2">
                                        <a class="" href="#">
                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                            <span class="text-muted fw-bold">15/100</span>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="" href="#">
                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                            <span class="text-muted fw-bold">3</span>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="ms-2" href="#">
                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="" href="#">
                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end task-box-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="media mb-3">
                            <img src="{{ URL::asset('assets/images/widgets/project1.jpg') }}" alt="" class="thumb-md rounded-circle">
                            <div class="media-body align-self-center text-truncate ms-3">
                                <h4 class="m-0 fw-semibold text-dark font-15">Transfer money</h4>
                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Jack Z Jackson</p>
                            </div><!--end media-body-->
                        </div>
                        <hr class="hr-dashed">
                        <div class="d-flex justify-content-between mb-3">
                            <h6 class="fw-semibold m-0">Start : <span class="text-muted fw-normal"> 08 Dec 2020</span></h6>
                            <h6 class="fw-semibold m-0">Deadline : <span class="text-muted fw-normal"> 28 Fab 2021</span></h6>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <h5 class="font-16 m-0 fw-bold">$71,500</h5>
                                    <p class="mb-0 fw-semibold">Total Budget</p>
                                </div>
                            </div><!--end col-->
                            <div class="col-auto align-self-center">
                                <h5 class="font-14 m-0 fw-bold">$61,800 <span class="font-12 text-muted fw-normal">Used Budget</span></h5>
                            </div><!--end col-->
                        </div><!--end row-->
                        <div>
                            <p class="text-muted mt-2 mb-1">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form.
                            </p>
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-semibold">All Hours : <span class="text-muted fw-normal"> 530 / 281:30</span></h6>
                                <h6 class="fw-semibold">Today : <span class="text-muted fw-normal"> 2:45</span><span class="badge badge-soft-success fw-semibold ms-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                            </div>
                            <p class="text-muted text-end mb-1">15% Complete</p>
                            <div class="progress mb-4" style="height: 4px;">
                                <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="img-group">
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-4.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-1.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-7.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a href="" class="avatar-box thumb-xxs align-self-center">
                                        <span class="avatar-title bg-soft-info rounded-circle font-13 fw-normal">+6</span>
                                    </a>
                                </div><!--end img-group-->
                                <ul class="list-inline mb-0 align-self-center">
                                    <li class="list-item d-inline-block me-2">
                                        <a class="" href="#">
                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                            <span class="text-muted fw-bold">15/100</span>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="" href="#">
                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                            <span class="text-muted fw-bold">3</span>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="ms-2" href="#">
                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="" href="#">
                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end task-box-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="media mb-3">
                            <img src="{{ URL::asset('assets/images/widgets/project3.jpg') }}" alt="" class="thumb-md rounded-circle">
                            <div class="media-body align-self-center text-truncate ms-3">
                                <h4 class="m-0 fw-semibold text-dark font-15">Organic Farming</h4>
                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Hyman M. Cross</p>
                            </div><!--end media-body-->
                        </div>
                        <hr class="hr-dashed">
                        <div class="d-flex justify-content-between mb-3">
                            <h6 class="fw-semibold m-0">Start : <span class="text-muted fw-normal"> 15 Nov 2020</span></h6>
                            <h6 class="fw-semibold m-0">Deadline : <span class="text-muted fw-normal"> 28 Fab 2021</span></h6>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <h5 class="font-16 m-0 fw-bold">$45,300</h5>
                                    <p class="mb-0 fw-semibold">Total Budget</p>
                                </div>
                            </div><!--end col-->
                            <div class="col-auto align-self-center">
                                <h5 class="font-14 m-0 fw-bold">$24,500 <span class="font-12 text-muted fw-normal">Used Budget</span></h5>
                            </div><!--end col-->
                        </div><!--end row-->
                        <div>
                            <p class="text-muted mt-2 mb-1">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form.
                            </p>
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-semibold">All Hours : <span class="text-muted fw-normal"> 530 / 281:30</span></h6>
                                <h6 class="fw-semibold">Today : <span class="text-muted fw-normal"> 2:45</span><span class="badge badge-soft-primary fw-semibold ms-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                            </div>
                            <p class="text-muted text-end mb-1">15% Complete</p>
                            <div class="progress mb-4" style="height: 4px;">
                                <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="img-group">
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-10.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-8.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-2.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a href="" class="avatar-box thumb-xxs align-self-center">
                                        <span class="avatar-title bg-soft-info rounded-circle font-13 fw-normal">+6</span>
                                    </a>
                                </div><!--end img-group-->
                                <ul class="list-inline mb-0 align-self-center">
                                    <li class="list-item d-inline-block me-2">
                                        <a class="" href="#">
                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                            <span class="text-muted fw-bold">15/100</span>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="" href="#">
                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                            <span class="text-muted fw-bold">3</span>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="ms-2" href="#">
                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="" href="#">
                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end task-box-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div>

        <div class="row">

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="media mb-3">
                            <img src="{{ URL::asset('assets/images/widgets/project1.jpg') }}" alt="" class="thumb-md rounded-circle">
                            <div class="media-body align-self-center text-truncate ms-3">
                                <h4 class="m-0 fw-semibold text-dark font-15">Book My World</h4>
                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Hyman M. Cross</p>
                            </div><!--end media-body-->
                        </div>
                        <hr class="hr-dashed">
                        <div class="d-flex justify-content-between mb-3">
                            <h6 class="fw-semibold m-0">Start : <span class="text-muted fw-normal"> 15 Nov 2020</span></h6>
                            <h6 class="fw-semibold m-0">Deadline : <span class="text-muted fw-normal"> 28 Fab 2021</span></h6>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <h5 class="font-16 m-0 fw-bold">$38,200</h5>
                                    <p class="mb-0 fw-semibold">Total Budget</p>
                                </div>
                            </div><!--end col-->
                            <div class="col-auto align-self-center">
                                <h5 class="font-14 m-0 fw-bold">$16,800 <span class="font-12 text-muted fw-normal">Used Budget</span></h5>
                            </div><!--end col-->
                        </div><!--end row-->
                        <div>
                            <p class="text-muted mt-2 mb-1">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form.
                            </p>
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-semibold">All Hours : <span class="text-muted fw-normal"> 530 / 281:30</span></h6>
                                <h6 class="fw-semibold">Today : <span class="text-muted fw-normal"> 2:45</span><span class="badge badge-soft-warning fw-semibold ms-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                            </div>
                            <p class="text-muted text-end mb-1">15% Complete</p>
                            <div class="progress mb-4" style="height: 4px;">
                                <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="img-group">
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-4.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-3.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-2.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a href="" class="avatar-box thumb-xxs align-self-center">
                                        <span class="avatar-title bg-soft-info rounded-circle font-13 fw-normal">+6</span>
                                    </a>
                                </div><!--end img-group-->
                                <ul class="list-inline mb-0 align-self-center">
                                    <li class="list-item d-inline-block me-2">
                                        <a class="" href="#">
                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                            <span class="text-muted fw-bold">15/100</span>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="" href="#">
                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                            <span class="text-muted fw-bold">3</span>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="ms-2" href="#">
                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="" href="#">
                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->
            </div><!--end col-->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="media mb-3">
                            <img src="{{ URL::asset('assets/images/widgets/project3.jpg') }}" alt="" class="thumb-md rounded-circle">
                            <div class="media-body align-self-center text-truncate ms-3">
                                <h4 class="m-0 fw-semibold text-dark font-15">New GPS System</h4>
                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Hyman M. Cross</p>
                            </div><!--end media-body-->
                        </div>
                        <hr class="hr-dashed">
                        <div class="d-flex justify-content-between mb-3">
                            <h6 class="fw-semibold m-0">Start : <span class="text-muted fw-normal"> 15 Nov 2020</span></h6>
                            <h6 class="fw-semibold m-0">Deadline : <span class="text-muted fw-normal"> 28 Fab 2021</span></h6>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <h5 class="font-16 m-0 fw-bold">$55,600</h5>
                                    <p class="mb-0 fw-semibold">Total Budget</p>
                                </div>
                            </div><!--end col-->
                            <div class="col-auto align-self-center">
                                <h5 class="font-14 m-0 fw-bold">$27,200 <span class="font-12 text-muted fw-normal">Used Budget</span></h5>
                            </div><!--end col-->
                        </div><!--end row-->
                        <div>
                            <p class="text-muted mt-2 mb-1">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form.
                            </p>
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-semibold">All Hours : <span class="text-muted fw-normal"> 530 / 281:30</span></h6>
                                <h6 class="fw-semibold">Today : <span class="text-muted fw-normal"> 2:45</span><span class="badge badge-soft-pink fw-semibold ms-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                            </div>
                            <p class="text-muted text-end mb-1">15% Complete</p>
                            <div class="progress mb-4" style="height: 4px;">
                                <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="img-group">
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-2.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-9.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-10.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a href="" class="avatar-box thumb-xxs align-self-center">
                                        <span class="avatar-title bg-soft-info rounded-circle font-13 fw-normal">+6</span>
                                    </a>
                                </div><!--end img-group-->
                                <ul class="list-inline mb-0 align-self-center">
                                    <li class="list-item d-inline-block me-2">
                                        <a class="" href="#">
                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                            <span class="text-muted fw-bold">15/100</span>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="" href="#">
                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                            <span class="text-muted fw-bold">3</span>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="ms-2" href="#">
                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="" href="#">
                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end task-box-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="media mb-3">
                            <img src="{{ URL::asset('assets/images/widgets/project2.jpg') }}" alt="" class="thumb-md rounded-circle">
                            <div class="media-body align-self-center text-truncate ms-3">
                                <h4 class="m-0 fw-semibold text-dark font-15">Body Care</h4>
                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Hyman M. Cross</p>
                            </div><!--end media-body-->
                        </div>
                        <hr class="hr-dashed">
                        <div class="d-flex justify-content-between mb-3">
                            <h6 class="fw-semibold m-0">Start : <span class="text-muted fw-normal"> 15 Nov 2020</span></h6>
                            <h6 class="fw-semibold m-0">Deadline : <span class="text-muted fw-normal"> 28 Fab 2021</span></h6>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <h5 class="font-16 m-0 fw-bold">$65,000</h5>
                                    <p class="mb-0 fw-semibold">Total Budget</p>
                                </div>
                            </div><!--end col-->
                            <div class="col-auto align-self-center">
                                <h5 class="font-14 m-0 fw-bold">$36,900 <span class="font-12 text-muted fw-normal">Used Budget</span></h5>
                            </div><!--end col-->
                        </div><!--end row-->
                        <div>
                            <p class="text-muted mt-2 mb-1">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form.
                            </p>
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-semibold">All Hours : <span class="text-muted fw-normal"> 530 / 281:30</span></h6>
                                <h6 class="fw-semibold">Today : <span class="text-muted fw-normal"> 2:45</span><span class="badge badge-soft-info fw-semibold ms-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                            </div>
                            <p class="text-muted text-end mb-1">15% Complete</p>
                            <div class="progress mb-4" style="height: 4px;">
                                <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="img-group">
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-6.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-2.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-3.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a class="user-avatar user-avatar-group" href="#">
                                        <img src="{{ URL::asset('assets/images/users/user-4.jpg') }}" alt="user" class="rounded-circle thumb-xxs">
                                    </a>
                                    <a href="" class="avatar-box thumb-xxs align-self-center">
                                        <span class="avatar-title bg-soft-info rounded-circle font-13 fw-normal">+6</span>
                                    </a>
                                </div><!--end img-group-->
                                <ul class="list-inline mb-0 align-self-center">
                                    <li class="list-item d-inline-block me-2">
                                        <a class="" href="#">
                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                            <span class="text-muted fw-bold">15/100</span>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="" href="#">
                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                            <span class="text-muted fw-bold">3</span>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="ms-2" href="#">
                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="" href="#">
                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end task-box-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
