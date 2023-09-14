@extends('layouts.master')
@section('title') SoftwareClinic @endsection

    @section('content')
        @component('components.breadcrumb')
        @slot('li_1') Interfaz de usuario @endslot
            @slot('li_2') Configuracion del Sistema @endslot
            @slot('li_3') Procedimiento @endslot
            @slot('li_4') Añadir Nuevo @endslot
            @slot('title') Procedimiento @endslot
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
                                <h4 class="card-title">Nuevo Procedimiento</h4>
                                <p class="text-muted mb-0">Crea un nuevo Procedimiento con la pantalla intutiva de SoftwareClinic.</p>
                                <div class="card-body">
                                <form method="POST" action="{{ route('procedimiento.store') }}">
                                 @csrf
                                 <div class="mb-3">
                                     <label for="id" class="form-label">Id</label>
                                     <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="">
                                    @error('id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                     <label for="Nbre" class="form-label">Nombre Procedimiento</label>
                                     <input id="Nbre" type="text" class="form-control @error('Nbre') is-invalid @enderror" name="Nbre" value="{{ old('Nbre') }}" required autocomplete="">
                                    @error('Nbre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                     <label for="Nbre_Soat" class="form-label">Nombre Soat</label>
                                     <input id="Nbre_Soat" type="text" class="form-control @error('Nbre_Soat') is-invalid @enderror" name="Nbre_Soat" value="{{ old('Nbre_Soat') }}" required autocomplete="">
                                    @error('Nbre_Soat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                 <div class="mb-3">
                                 <label for="tipoprocrips">Fin Procedimiento</label>
                                <select class="form-control" id="tipoprocrips" name="tipoprocrips" required>
                                    @foreach($tipoprocrips as $tipoprocrips)
                                      <option value="{{ $tipoprocrips->id }}">{{ $tipoprocrips->Nbre }}</option>
                                     @endforeach
                                </select>
                                     </div>
                                     <div class="mb-3">
                                 <label for="id_tipoprocedimiento">Tipo Procedimiento</label>
                                <select class="form-control" id="id_tipoprocedimiento" name="id_tipoprocedimiento" required>
                                    @foreach($id_tipoprocedimiento as $id_tipoprocedimiento)
                                      <option value="{{ $id_tipoprocedimiento->id }}">{{ $id_tipoprocedimiento->Nbre }}</option>
                                     @endforeach
                                </select>
                                     </div>
                                     <div class="mb-3">
                                 <label for="Id_TipoFinProced">Tipo Fin Procedimiento</label>
                                <select class="form-control" id="Id_TipoFinProced" name="Id_TipoFinProced" required>
                                    @foreach($Id_TipoFinProced as $Id_TipoFinProced)
                                      <option value="{{ $Id_TipoFinProced->id }}">{{ $Id_TipoFinProced->Nbre }}</option>
                                     @endforeach
                                </select>
                                     </div>
                                     <div class="mb-3">
                                 <label for="Id_TipoConceptoAgrup">Codigo Del Concepto Rips</label>
                                <select class="form-control" id="Id_TipoConceptoAgrup" name="Id_TipoConceptoAgrup" required>
                                    @foreach($Id_TipoConceptoAgrup as $Id_TipoConceptoAgrup)
                                      <option value="{{ $Id_TipoConceptoAgrup->id }}">{{ $Id_TipoConceptoAgrup->Nbre }}</option>
                                     @endforeach
                                </select>
                                     </div>
                                     <div class="mb-3">
                                 <label for="manuales">Manual</label>
                                <select class="form-control" id="manuales" name="manuales" required>
                                    @foreach($manuales as $manuales)
                                      <option value="{{ $manuales->id }}">{{ $manuales->nombre }}</option>
                                     @endforeach
                                </select>
                                     </div>
                                 <div class="mb-3">
                                 <div class="form-check">
                                     <input id="Paquete" type="checkbox" class="form-check-label @error('Paquete') is-invalid @enderror" name="Paquete" value="1" checked>
                                        @error('Paquete')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <label for="Paquete" class="form-check-label">Es Paquete</label>
                                     </div>
                                     <div class="mb-3">
                                 <div class="form-check">
                                     <input id="EsAgenda" type="checkbox" class="form-check-label @error('EsAgenda') is-invalid @enderror" name="EsAgenda" value="1" checked>
                                        @error('EsAgenda')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <label for="EsAgenda" class="form-check-label">Es Agenda</label>
                                     </div>
                                     <div class="mb-3">
                                 <div class="form-check">
                                     <input id="AProcEnfer" type="checkbox" class="form-check-label @error('AProcEnfer') is-invalid @enderror" name="AProcEnfer" value="1" checked>
                                        @error('AProcEnfer')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <label for="AProcEnfer" class="form-check-label">Procedimiento Enfemeria</label>
                                     </div>
                                     <div class="mb-3">
                                     <label for="C_Real" class="form-label">Codigo Real</label>
                                     <input id="C_Real" type="text" class="form-control @error('C_Real') is-invalid @enderror" name="C_Real" value="{{ old('C_Real') }}" required autocomplete="">
                                    @error('C_Real')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                     <label for="C_Homologado" class="form-label">Codigo Homologado</label>
                                     <input id="C_Homologado" type="text" class="form-control @error('C_Homologado') is-invalid @enderror" name="C_Homologado" value="{{ old('C_Homologado') }}" required autocomplete="">
                                    @error('C_Homologado')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                     <label for="C_Personalizado" class="form-label">Codigo Personalizado</label>
                                     <input id="C_Personalizado" type="text" class="form-control @error('C_Personalizado') is-invalid @enderror" name="C_Personalizado" value="{{ old('C_Personalizado') }}" required autocomplete="">
                                    @error('C_Personalizado')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                     <div class="mb-3">
                                 <div class="form-check">
                                     <input id="activo" type="checkbox" class="form-check-label @error('activo') is-invalid @enderror" name="activo" value="1" checked>
                                        @error('estado')
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <label for="activo" class="form-check-label">Estado</label>
                                     </div>
                                    </div>
                            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                                <button onclick="location.href='{{ route('procedimiento.index') }}'" class="btn btn-danger">Cancelar </button>
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


