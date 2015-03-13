@extends('layouts.test')
@section('contenido')

        {{Form::open()}}
    	<legend>Planificacion</legend>

        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
    	<div class="form-group">
            {{Form::label('facultad','Facultad')}}
            {{Form::select('facultad',array(1,2),$value=null,array('class'=>'form-control'))}}
    	</div>
        <div class="form-group">
            {{Form::label('escuela','Escuela')}}
            {{Form::select('Escuela',array(1,2),$value=null,array('class'=>'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('carrera','Carrera')}}
            {{Form::select('Carrera',array(1,2),$value=null,array('class'=>'form-control'))}}
        </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">


                <div class="form-group">
                    {{Form::label('fecha','Fecha')}}
                    {{Form::input('date','fecha',$value=null,array('class'=>'form-control'))}}


                </div>
            </div>

    </div>
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
        
        <div class="form-group">
            {{Form::label('asignatura','Asignatura')}}
            {{Form::select('asignatura',array(1,2),$value=null,array('class'=>'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('docente','Profesor')}}
            {{Form::select('docenta',array(1,2),$value=null,array('class'=>'form-control'))}}
        </div>


        <div class="form-group">
            {{Form::label('carrera','Carrera')}}
            {{Form::select('Carrera',array(1,2),$value=null,array('class'=>'form-control'))}}

        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="form-group">
            {{Form::label('semestre','Semestre')}}
            {{Form::select('Semestre',array(1,2),$value=null,array('class'=>'form-control'))}}

        </div>
    </div>


    </div>
<div class="container">
<div class="form-group">
    {{Form::submit('enviar',array("class"=>"btn btn-primary"))}}
    {{Form::close()}}
</div>
</div>




    @stop