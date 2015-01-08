@extends('layouts.test')
@section('contenido')

<h1>Ingreso Docente</h1>
{{Form::open(array('url'=>'/p/add','method'=>'post','class'=>"form-horizontal", 'role'=>"form"))}}

    <p>{{Form::label('rut','RUT')}}{{Form::text('rut')}}</p>
{{Form::text('rut',array('placeholder'=>"Address Line 1", 'class'=>"form-control"))}}
    {{$errors->first('rut')}}
    <p>
        {{Form::label('nombres','Nombres')}}{{Form::text('nombres')}}
        {{$errors->first('nombres')}}
    </p>
<p>
    {{Form::label('apellidos','Apellidos')}}{{Form::text('apellidos')}}
    {{$errors->first('apellidos')}}
</p>
<p>
    {{Form::submit('Enviar')}}
    {{Form::button()}}
</p>

{{Form::close()}}

    @stop