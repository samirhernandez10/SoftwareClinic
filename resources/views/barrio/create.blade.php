@extends('layouts.master')
@section('title') SoftwareClinic @endsection

    @section('content')
        @component('components.breadcrumb')
        @slot('li_1') Interfaz de usuario @endslot
            @slot('li_2') Configuracion del Sistema @endslot
            @slot('li_3') Barrio @endslot
            @slot('li_4') Añadir Nuevo @endslot
            @slot('title') Barrio @endslot
        @endcomponent

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
                
                .card {opacity: 0.9}

        </style>


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Nuevo Barrio</h4>
                                <p class="text-muted mb-0">Crea un nuevo Barrio con la pantalla intutiva de SoftwareClinic.</p>
                                <div class="card-body">
                                <form method="POST" action="{{ route('barrio.store') }}">
                                 @csrf
                                 <div class="mb-3">
                                     <label for="nombre" class="form-label">Barrio</label>
                                     <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="">
                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                 <div class="mb-3">
                                 <label for="id_departamento">Departamento</label>
                                <select class="form-control" id="id_departamento" name="id_departamento" required>
                                    @foreach($departamento as $departamento)
                                      <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                                     @endforeach
                                </select>
                                     </div>
                                     <div class="mb-3">
                                 <label for="id_municipio">Municipio</label>
                                <select class="form-control" id="id_municipio" name="id_municipio" required>
                                    @foreach($municipio as $municipio)
                                      <option value="{{ $municipio->id }}">{{ $municipio->nombre }}</option>
                                     @endforeach
                                </select>
                                     </div>
                                     <div class="mb-3">
                                 <label for="zonaresidencial">Zona Residencial</label>
                                <select class="form-control" id="zonaresidencial" name="zonaresidencial" required>
                                    @foreach($zonaresidencial as $zonaresidencial)
                                      <option value="{{ $zonaresidencial->id }}">{{ $zonaresidencial->nombre }}</option>
                                     @endforeach
                                </select>
                                     </div>
                                     
                                 <div class="mb-3">
                                 <div class="form-check">
                                     <input id="estado" type="checkbox" class="form-check-label @error('estado') is-invalid @enderror" name="estado" value="1" checked>
                                        @error('estado')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <label for="estado" class="form-check-label">Estado</label>
                                     </div>
                                    </div>
                            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                                <button onclick="location.href='{{ route('barrio.index') }}'" class="btn btn-danger">Cancelar </button>
                            </div>
                        </div>
                    </form>
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

