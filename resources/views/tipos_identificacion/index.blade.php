@extends('layouts.master')
@section('title') SoftwareClinic @endsection
    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Interfaz de usuario @endslot
            @slot('li_2') Configuracion del Sistema @endslot
            @slot('li_3') Tipo de Identificacion @endslot
            @slot('title')Tipo de Identificacion @endslot
        @endcomponent
        @section('css')
            <link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        @endsection
        
        <style>
            body{
                background-image: url('/images/fondopagemedico.jpg');
                font-family: 'Roboto', Helvetica, sans-serif;
                background-size: cover;
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
        <a href="{{ route('tipos_identificacion.create') }}" class="btn btn-primary">Añadir Nuevo</a>
        @if(Session::has('success'))
                 <div class="alert alert-success border-0">
        {{ Session::get('success') }}
        </div>
        @endif
        <br><br>
        <div class="card-body">
            <div class="col-sm-12">
                <div class="card">                  
                <div class="table-rep-plugin">
                <div class="card-body table-responsive" data-pattern="priority-columns">
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                 <thead>
                    <tr>
                    <th>ID</th>
                    <th data-priority="3">Nombre</th>
                    <th data-priority="1">Activo</th>
                    <th data-priority="2">Id_Dian</th>
                    <th data-priority="2">Usuario</th>
                    <th data-priority="3">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($tipos_identificacion as $tipoid)
                    <tr>
                        <td>{{ $tipoid->id }}</td>
                        <td>{{ $tipoid->nombre }}</td>
                        <td>{{ $tipoid->activo ? 'Sí' : 'No' }}</td>
                         <td>{{ $tipoid->Id_Dian }}</td>
                         <td>{{ optional($tipoid->usuario)->name }}</td>
                         <td>
                         <form action="{{ route('tipos_identificacion.destroy', ['tipos_identificacion' => $tipoid->id]) }}" method="POST" style="display:inline;">
                                 @csrf
                                 @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                        </td>
                         </tr>
                    @endforeach
                </table>
            </div>
        </div>
     </div>
    </div>
 </div>
</div>
  

@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.datatable.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection

