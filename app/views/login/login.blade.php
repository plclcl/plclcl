@extends('layouts.test')
@section('contenido')
    {{ Form::open(array('url' => '/login', 'method' => 'POST')) }}
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
            {{ Form::submit() }}
        </li>
    </ul>
    {{ Form::close() }}
@stop