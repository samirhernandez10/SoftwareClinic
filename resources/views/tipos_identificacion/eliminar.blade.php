@extends('layouts.app_menu')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Eliminar Tipo de Identificación</h1>
            <p>¿Está seguro de que desea eliminar el siguiente tipo de identificación?</p>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $tipo_identificacion->id }}</td>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <td>{{ $tipo_identificacion->nombre }}</td>
                </tr>
                <tr>
                    <th>Activo</th>
                    <td>{{ $tipo_identificacion->activo ? 'Sí' : 'No' }}</td>
                </tr>
                <tr>
                    <th>Fecha de Creación</th>
                    <td>{{ $tipo_identificacion->fecha_creacion }}</td>
                </tr>
                <tr>
                    <th>Identificacion Dian</th>
                    <td>{{ $tipo_identificacion->Id_Dian }}</td>
                </tr>
                <tr>
                    <th>Usuario</th>
                    <td>{{ $tipo_identificacion->usuario_id }}</td>
                </tr>
            </table>
            <form action="{{ route('tipos_identificacion.destroy', $tipo_identificacion->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                <a href="{{ route('tipos_identificacion.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>