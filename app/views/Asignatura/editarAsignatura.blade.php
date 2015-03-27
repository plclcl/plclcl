@extends('layouts.test')
@section('contenido')
    {{Form::open()}}
    	<legend>Editar Asignatura</legend>

        <div class="form-group">

            {{Form::label('codigo','Codigo')}}
            {{Form::text('codigo',$asignatura['codigo'],array('class'=>"form-control",'placeholder'=>"INF-123"))}}

        </div>
        <div class="form-group">

            {{Form::label('nombre','Asignatura')}}
            {{Form::text('nombre',$asignatura['nombre'],array('class'=>"form-control",'placeholder'=>"Nombre Asignatura"))}}

        </div>

    {{Form::submit('Crear',array("class"=>"btn btn-primary"))}}

    {{Form::close()}}
    @stop