@extends('layouts.app_menu')


@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Software Clínico')</title>
    <link rel="stylesheet" type="text/css" href="/css/style_menu.css">
	<link rel="stylesheet" type="text/css" href="/css/style_tipoidentificacion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Lista de empresas</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                     <th scope="col">ID</th>
                                    <th scope="col">Nombre de la Empresa</th>
                                    <th scope="col">Tipo Documento</th>
                                    <th scope="col">Número de identificación</th>
                                    <th scope="col">Dig Verif</th>
                                    <th scope="col">Cod Hab</th>
                                    <th scope="col">Municipio</th>
                                    <th scope="col">Correo Fac Electronic</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Tipo Empresa</th>
                                    <th scope="col">EsFacturaIn</th>
                                    <th scope="col">EsResiduo</th>
                                    <th scope="col">EsNomina</th>
                                    <th scope="col">EsAuditoria </th>
                                    <th scope="col">Usuairo </th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($empresa as $empresa)
                                    <tr>
                                        <td>{{ $empresa->id }}</td>
                                        <td>{{ $empresa->Nbre }}</td>
                                        <td>{{ $empresa->id_tipo_identificacion }}</td>
                                        <td>{{ $empresa->no_documento }}</td>
                                        <td>{{ $empresa->Dig_Verificacion }}</td>
                                        <td>{{ $empresa->CHabilitacion }}</td>
                                        <td>{{ $empresa->id_municipio }}</td>
                                        <td>{{ $empresa->correoFacturaElectronica }}</td>
                                        <td>{{ $empresa->telefono }}</td>
                                        <td>{{ $empresa->categoria }}</td>
                                        <td>{{ $empresa->TipoPersona }}</td>
                                        <td>{{ $empresa->FacTInterna }}</td>
                                        <td>{{ $empresa->EsManejoResiduos }}</td>
                                        <td>{{ $empresa->EsNomina }}</td>
                                        <td>{{ $empresa->requiereAuditoria }}</td>
                                        <td>{{ optional($empresa->usuario)->name }}</td>
                                        <td>
                                            <form action="{{ route('empresa.destroy', $empresa->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="mt-3">
                            <a href="{{ route('empresa.create') }}" class="btn btn-primary">Crear empresa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection

