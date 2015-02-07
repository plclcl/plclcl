@extends('layouts.test')
@section('contenido')
{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
<ul>
    <li>
        {{ Form::label('rut', 'Rut:') }}
        {{ Form::text('rut') }}
    </li>
    <li>
        {{ Form::label('contrasena', 'Contrasena:') }}
        {{ Form::text('contrasena') }}
    </li>
    <li>
        {{ Form::label('nombre', 'Nombre:') }}
        {{ Form::text('nombre') }}
    </li>
    <li>
        {{ Form::label('apellidopaterno', 'Apellidopaterno:') }}
        {{ Form::text('apellidopaterno') }}
    </li>
    <li>
        {{ Form::label('apellidomaterno', 'Apellidomaterno:') }}
        {{ Form::text('apellidomaterno') }}
    </li>
    <li>
        {{ Form::label('genero', 'Genero:') }}
        {{ Form::text('genero') }}
    </li>
    <li>
        {{ Form::label('fk_departamento', 'Fk_departamento:') }}
        {{ Form::text('fk_departamento') }}
    </li>
    <li>
        {{ Form::submit() }}
    </li>
</ul>
{{ Form::close() }}
    @stop