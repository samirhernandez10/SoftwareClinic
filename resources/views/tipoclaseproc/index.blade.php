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
                    <div class="card-header">Tipo Clase Procedimiento</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Usuario </th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tipoclaseproc as $tipoclaseproc)
                                    <tr>
                                        <td>{{ $tipoclaseproc->Nbre }}</td>
                                        <td>{{ optional($tipoclaseproc->usuario)->name }}</td>
                                        <td><form action="{{ route('tipoclaseproc.destroy', ['tipoclaseproc' => $tipoclaseproc->id]) }}" method="POST" style="display:inline;">
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
                            <a href="{{ route('tipoclaseproc.create') }}" class="btn btn-primary">Crear Tipo Clase Procedimiento</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


