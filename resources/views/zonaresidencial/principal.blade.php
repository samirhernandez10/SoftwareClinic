@extends('layouts.master')
@section('title') SoftwareClinic @endsection
    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Interfaz de Usuario @endslot
            @slot('li_2') Configuracion del Sistema @endslot
            @slot('li_3') Zona Residencial @endslot
            @slot('title')Zona Residencial @endslot
        @endcomponent
<style>
</style>    
        <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Zona Residencial </h4>
                            <p class="text-muted mb-0">Crea la zona residencial de cauerdo a los lineamientos.</p>
                        </div><!--end card-header-->
                    <div class="card-body">
            <form action="{{ route('zonaresidencial.store') }}" method="POST" class="form-horizontal form-wizard-wrapper">
                @csrf
                 <div class="col-sm-4">
                    <div class="form-group row">
                        <label for="nombre" class=".col-sm-2 col-form-label">Nombre</label>
                            <div class="col-lg-8">
                            <input id="nombre" name="nombre" type="text" class="form-control">
                            </div>
                            </div>
                            <div class="card-body">
                            <div class="form-group row">
                            <div class="checkbox checkbox-success form-check-inline">
                                <input id="activo" type="checkbox" name="activo" value="1" checked>
                                <label for="activo">Activo</label>
                            </div>
                    </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button onclick="location.href='{{ route('zonaresidencial.create') }}'" class="btn btn-danger">Cancelar </button>
            </form>
        </div>
    </div>
</div>
   

   

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