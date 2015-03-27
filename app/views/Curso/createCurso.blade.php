@extends('layouts.test')
@section('contenido')

       {{Form::open()}}
   	<legend>Form Title</legend>

   	<div class="form-group">
   		{{Form::label('semestre','Semestre')}}
   		{{Form::text('semestre',null,array('class'=>'form-control'))}}
   	</div>
       <div class="form-group">
           {{Form::label('anio','AÑO')}}
           {{Form::text('anio',null,array('class'=>'form-control'))}}
       </div>
       <div class="form-group">
           {{Form::label('seccion','Seccion')}}
           {{Form::text('seccion',null,array('class'=>'form-control'))}}
       </div>
       <div class="form-group">
           {{Form::label('docente','Docente')}}
           {{Form::text('docente',null,array('class'=>'form-control'))}}
       </div>
       <div class="form-group">
           {{Form::label('asignatura','Asignatura')}}
           {{Form::text('asignatura',null,array('class'=>'form-control'))}}
       </div>

    {{Form::submit('Enviar',array('class'=>"btn btn-primary"))}}


   {{Form::close()}}
    @stop