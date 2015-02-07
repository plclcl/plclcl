@extends('layouts.test')
@section('contenido')
    
    {{Form::open(array('url'=>'/t/vista','method'=>'post'))}}
  	<legend>Registro De Nuevos Docentes</legend>
      <div class="form-group">

          {{Form::label('rut','RUN')}}
          {{Form::text('rut',$value=null,array('class'=>"form-control",'placeholder'=>"12.345.678-9"))}}

      </div>

      <div class="form-group">

          {{Form::label('nombre','Nombre')}}
          {{Form::text('nombre',$value=null,array('class'=>"form-control",'placeholder'=>"Nombre"))}}

  	</div>

      <div class="form-group">
          {{Form::label('apellidopaterno','Apellido Paterno')}}
          {{Form::text('apellifopaterno',$value=null,array('class'=>"form-control",'placeholder'=>"Apellido Paterno"))}}

      </div>
      <div class="form-group">
          {{Form::label('apellidomaterno','Apellido Materno')}}
          {{Form::text('apellidomaterno',$value=null,array('class'=>"form-control",'placeholder'=>"Apellido Materno"))}}

      </div>
      <div class="form-group">

          {{Form::label('genero','Sexo')}}
          {{Form::select('genero',array('M'=>'Masculino','F'=>'Femenino'),Input::old('genero'),array('class'=>"form-control"))}}

      </div>



    {{Form::submit('Crear',array('class'=>"btn btn-primary"))}}


  {{Form::close()}}
    @stop