@extends('layouts.test')
@section('contenido')
    <form action="" method="POST" role="form">
    	<legend>Planificacion</legend>

        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
    	<div class="form-group">
            {{Form::label('facultad','Facultad')}}
            {{Form::select('facultad',array(1,2),$value=null)}}
    	</div>
        <div class="form-group">
            {{Form::label('escuela','Escuela')}}
            {{Form::select('Escuela',array(1,2),$value=null)}}
        </div>
        <div class="form-group">
            {{Form::label('carrera','Carrera')}}
            {{Form::select('Carrera',array(1,2),$value=null)}}
        </div>
    </div>
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
        
        <div class="form-group">
            {{Form::label('asignatura','Asignatura')}}
            {{Form::select('asignatura',array(1,2),$value=null)}}
        </div>
        <div class="form-group">
            {{Form::label('docente','Profesor')}}
            {{Form::select('docenta',array(1,2),$value=null)}}
        </div>
        <div class="form-group">
            {{Form::label('carrera','Carrera')}}
            {{Form::select('Carrera',array(1,2),$value=null)}}

        </div>
        </div>
    </div>




        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @stop