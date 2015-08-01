@extends('layouts.test')
@section('contenido')
    <form action="" method="{" role="form">
    	<legend>unidad</legend>
    
    	<div class="form-group">
            {{Form::label('semana','semana')}}
            {{Form::input('semana','semana',null)}}

    	</div>
        <div class="form-group">
            {{Form::label('unidad','unnidad')}}
            {{Form::input('Unidad','unidad',null)}}

        </div>
    
    	
    
    	<button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @stop