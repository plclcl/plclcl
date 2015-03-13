@extends('layouts.test')
@section('contenido')
    <div class="table-responsive">
        <legend>Listado Roles Existentes</legend>
        <table class="table table-hover">

            <thead>
            <th>ID</th>
            <th>Rol</th>

            <th>Edit</th>
            <th>Delete</th>
            </thead>

            <tbody>
            @foreach($datosRol as $rol)
                <tr>
                    <td>{{$rol->id}}</td>
                    <td>{{$rol->tipo_rol}}</td>
                    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop