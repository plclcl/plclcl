@extends('layouts.test')
@section('contenido')
  <!--  {{Form::open(array('url'=>'/t/vista','method'=>'post'))}} -->
    {{Form::open(array('url'=>'login','method'=>'post'))}}

    	<legend>Iniciar Sesión</legend>

    	<div class="form-group">

            {{Form::label('rut','Rut')}}
            {{Form::text('rut',$value=null,array('class'=>"form-control",'placeholder'=>"12.345.678-9"))}}

        </div>

        <div class="form-group">

            {{Form::label('contrasena','Contraseña')}}
            {{Form::password('contrasena',array('class'=>"form-control"))}}

        </div>


    {{Form::button('Cancelar',array('class'=>"btn btn-primary"))}}
    {{Form::submit('Ingresar',array('class'=>"btn btn-primary"))}}
    {{Form::close()}}

    @stop