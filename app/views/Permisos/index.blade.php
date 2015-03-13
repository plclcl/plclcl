@extends('layouts.test')
@section('contenido')
    <div class="table-responsive">
        <legend>Listado Docente</legend>
        <table class="table table-hover">

            <thead>
            <th>ID</th>
            <th>Permiso</th>


            <th>Edit</th>
            <th>Delete</th>
            </thead>

            <tbody>
            @foreach($datosPermiso as $permiso)
                <tr>
                    <td>{{$permiso->id}}</td>
                    <td>{{$permiso->tipo_permiso}}</td>

                    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>

                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop