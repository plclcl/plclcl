@extends('layouts.test')
@section('contenido')

    <form action="" method="post" role="form">
    	<legend>Form Title</legend>

    	<div class="form-group">

            {{Form::label('fechainicial','Fecha Inicio')}}
            {{Form::text('fechainicial',null,array('class'=>"form-control"))}}

    	</div>
        <div class="form-group">

            {{Form::label('','Fecha Inicio')}}
            {{Form::text('fechainicial',null,array('class'=>"form-control"))}}

        </div>

        <div class="form-group">

            {{Form::label('fechainicial','Fecha Inicio')}}
            {{Form::text('fechainicial',null,array('class'=>"form-control"))}}

        </div>




        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @stop