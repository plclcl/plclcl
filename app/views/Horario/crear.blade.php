@extends('layouts.test')
@section('contenido')

   <form action="" method="POST" role="form">
   	<legend>Agregar Periodos Horarios Individualmente</legend>

   	<div class="form-group">

        {{Form::label('periodo','Periodo')}}
        {{Form::text('periodo',null,array('class'=>'form-control','placeholder'=>'1'))}}


   	</div>
       <div class="form-group">

           {{Form::label('dia','Dia')}}
            {{Form::text('dia',null,array('class'=>'form-control','placeholder'=>'Lunes'))}}



       </div>


   	<button type="submit" class="btn btn-primary">Submit</button>
   </form>
    @stop