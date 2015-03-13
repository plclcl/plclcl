@extends('layouts.test')
@section('contenido')
    {{ Form::open(array('url' => '/login', 'method' => 'POST')) }}

    	<legend>Iniciar session</legend>

    	<div class="form-group">
            {{Form::label('rut','RUN')}}
            {{Form::text('rut',$value=null,array('class'=>"form-control",'placeholder'=>"12.345.678-9"))}}

    	</div>

        <div class="form-group">
            {{Form::label('password',$value=null,array('class'=>"col-sm-2 control-label"))}}
            {{Form::password('password',array('class'=>"form-control"))}}


        </div>


       {{Form::submit('iniciar session',array('class'=>"btn btn-primary"))}}

    {{ Form::close() }}

    <script type="text/javascript">
        var $inputRut = $('#rut');
        $inputRut.Rut({
            on_error: function(){
                $inputRut.closest("div").addClass("has-error");
            },
            on_success: function(){
                $inputRut.closest("div").removeClass("has-error");
                $inputRut.closest("div").addClass("has-success has-feedback");
            }
        });
    </script>
@stop
