@extends('layouts.test')
@section('contenido')
<!--<form action="" method="POST" role="form"> -->
	{{Form::open(array('url'=>'t/registro', 'method'=>'post'))}}
	<legend>Form Title</legend>


	<div class="form-group">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
			{{Form::label('facultad','Facultad',array('class'=>"col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label" ,'for'=>"textinput"))}}
			{{ Form::select('facultad',$facultades=Facultad::lists('nombre','id'),
                           Input::old('facultad'),
                           ['id'=>'facultad','class'=>'form-control'])}}
		</div>
	</div>
<div class="form-group">

	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
		{{Form::label('escuela','Escuela',array('class'=>"col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label" ,'for'=>"textinput"))}}
		{{ Form::select('escuela',$escuelas=Escuela::lists('nombre','id'),
                       Input::old('escuela'),
                       ['id'=>'escuela','class'=>'form-control'])}}
	</div>
</div>

<div class="form-group">
	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
		{{Form::label('carrera','Carrera',array('class'=>"col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label" ,'for'=>"textinput"))}}
		{{ Form::select('escuela',$facultades=Carrera::lists('nombre','id'),
                       Input::old('carrera'),
                       ['id'=>'carrera','class'=>'form-control'])}}
	</div>
</div>

<div class="form-group">
	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
		{{Form::label('carrera','Carrera',array('class'=>"col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label" ,'for'=>"textinput"))}}
		{{ Form::select('escuela',$facultades=Carrera::lists('nombre','id'),
                       Input::old('carrera'),
                       ['id'=>'carrera','class'=>'form-control'])}}
	</div>
</div>
@section('script')
	var
	@stop





	<button type="submit" class="btn btn-primary">Submit</button>



    {{Form::close()}}

    @stop

