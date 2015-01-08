@extends('layouts.test')
@section('contenido')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
             {{Form::open(array('url'=>'/p/add','method'=>'post','class'=>"form-horizontal", 'role'=>"form"))}}
                <fieldset>

                    <!-- Form Name -->
                    <legend>Crear Docente</legend>

                    <!-- Text input-->
                    <div class="form-group">

                        {{Form::label('rut','RUT',array('class'=>"col-sm-2 control-label" ,'for'=>"textinput"))}}

                        <div class="col-sm-10">
                            {{Form::text('rut',$value=null,array('placeholder'=>"12.345.678-9", 'class'=>"form-control"))}}
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
                        {{Form::label('apellidos','Apellidos',array('class'=>"col-sm-2 control-label" ,'for'=>"textinput"))}}

                        <div class="col-sm-10">
                            {{Form::text('apellidos',$value=null,array('placeholder'=>"Apellidos", 'class'=>"form-control"))}}
                            {{$errors->first('apellidos')}}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="pull-right">
                                {{Form::button('Cancelar',array('class'=>"btn btn-default"))}}
                                {{Form::submit('Guardar',array('class'=>"btn btn-primary"))}}


                            </div>
                        </div>
                    </div>

                </fieldset>
            {{Form::close()}}
        </div><!-- /.col-lg-12 -->
    </div><!--
@stop