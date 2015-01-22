@extends('layouts.test')
@section('contenido')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {{Form::open(array('url'=>'/p/add','method'=>'post','class'=>"form-horizontal", 'role'=>"form",'id'=>'formularioDocente'))}}
            <fieldset>

                <!-- Form Name -->
                <legend>Crear Docente</legend>

                <!-- Text input-->
                <div class="form-group">

                    {{Form::label('rut','RUT',array('class'=>"col-sm-2 control-label" ,'for'=>"textinput"))}}

                    <div class="col-sm-10">
                        {{Form::text('rut',$value=null,array('placeholder'=>"12.345.678-9", 'class'=>"form-control",'id'=>"textinput"))}}
                        {{$errors->first('rut')}}
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">

                    {{Form::label('nombres','Nombres',array('class'=>"col-sm-2 control-label" ,'for'=>"textinput"))}}

                    <div class="col-sm-10">
                        {{Form::text('nombres',$value=null,array('placeholder'=>"Nombres", 'class'=>"form-control"))}}
                        {{$errors->first('nombres')}}
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    {{Form::label('apellidopaterno', 'Apellido Paterno:',array('class'=>"col-sm-2 control-label" ,'for'=>"textinput"))}}


                    <div class="col-sm-10">
                        {{Form::text('apellidopaterno',$value=null,array('placeholder'=>"Apellidos", 'class'=>"form-control"))}}
                        {{$errors->first('apellidopaterno')}}
                    </div>
                </div>
                <!-- Apellido Materno-->
                <div class="form-group">
                    {{Form::label('apellidomaterno', 'Apellidomaterno:',array('class'=>"col-sm-2 control-label" ,'for'=>"textinput"))}}

                    <div class="col-sm-10">
                        {{Form::text('apellidomaterno',$value=null,array('placeholder'=>"Apellidos", 'class'=>"form-control"))}}
                        {{$errors->first('apellidomaterno')}}
                    </div>
                </div>
        </fieldset>
        </div>

    </div>
    @stop