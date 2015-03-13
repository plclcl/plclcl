@extends('layouts.test')
@section('contenido')
    <div class="table-responsive">
        <legend>Listado Periodos Registrados</legend>
        <table class="table table-hover">

            <thead>
            <th>ID</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Escuela</th>

            <th>Edit</th>
            <th>Delete</th>
            </thead>

            <tbody>
            @foreach($datosCarrera as $carrera)
                <tr>
                    <td>{{$carrera->id}}</td>
                    <td>{{$carrera->codigo}}</td>
                    <td>{{$carrera->nombre}}</td>
                    <td>{{$carrera->escuela}}</td>

                    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>

                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop