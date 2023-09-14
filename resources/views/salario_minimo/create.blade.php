@extends('layouts.master')
@section('title') SoftwareClinic @endsection

    @section('content')
        @component('components.breadcrumb')
        @slot('li_1') Interfaz de usuario @endslot
            @slot('li_2') Configuracion del Sistema @endslot
            @slot('li_3') Salario Minimo @endslot
            @slot('li_4') Añadir Nuevo @endslot
            @slot('title') Salario Minimo @endslot
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
                                <h4 class="card-title">Nuevo Salario Minimo</h4>
                                <p class="text-muted mb-0">Crea un nuevo Salario Minimo con la pantalla intutiva de SoftwareClinic.</p>
                                <div class="card-body">
                                <form method="POST" action="{{ route('salario_minimo.store') }}">
                                 @csrf
                                 <div class="mb-3">
                                     <label for="valor" class="form-label">Salario Minimo</label>
                                     <input id="valor" type="text" class="form-control @error('valor') is-invalid @enderror" name="valor" value="{{ old('valor') }}" required autocomplete=""oninput="calculateDailyValue()">
                                    @error('valor')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                     <label for="anio" class="form-label">Salario Minimo</label>
                                     <input id="anio" type="number" class="form-control @error('anio') is-invalid @enderror" name="anio" value="{{ old('anio') }}" required autocomplete="">
                                    @error('anio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                     <label for="valor_diario" class="form-label">Valor Diario</label>
                                     <input id="valor_diario" type="text" class="form-control @error('valor_diario') is-invalid @enderror" name="valor_diario" value="{{ old('valor') }}" required autocomplete="" oninput="calculateDailyValue()">
                                    @error('valor_diario')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
                                <button onclick="location.href='{{ route('salario_minimo.index') }}'" class="btn btn-danger">Cancelar </button>
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
    <script src="{{ URL::asset('assets/js/formulasalario.js') }}"></script>

@endsection

