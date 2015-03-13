@extends('layouts.test')
@section('contenido')

    {{Form::open(array('url'=>'docente/crear','method'=>'post'))}}
    <legend>Registro De Nuevos Docentes</legend>

    @if(Session::has('mensaje'))

        <h2>{{ Session::get('mensaje') }}</h2>

    @endif
    <div class="form-group">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

            {{Form::label('facultad','Facultad')}}
            {{Form::select('facultad',$facultades,$sFacultad,array('class'=>"form-control"))}}
            {{$errors->first("facultad")}}
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

            {{Form::label('departamento','Departamento')}}

            {{Form::select('departamento',$departamento,Input::old('departamento'),array('class'=>"form-control"))}}
            {{$errors->first("departamento")}}
        </div>
    </div>

    <div class="form-group">

        {{Form::label('rut','RUN')}}
        {{Form::text('rut',$datosDocentes['rut'],array('class'=>"form-control",'placeholder'=>"12.345.678-9"))}}
        {{$errors->first("rut")}}
    </div>

    <div class="form-group">

        {{Form::label('nombre','Nombre')}}
        {{Form::text('nombre',$datosDocentes['nombre'],array('class'=>"form-control",'placeholder'=>"Nombre"))}}
        {{$errors->first("nombre")}}
    </div>

    <div class="form-group">
        {{Form::label('apellidopaterno','Apellido Paterno')}}
        {{Form::text('apellidopaterno',$datosDocentes['apellidopaterno'],array('class'=>"form-control",'placeholder'=>"Apellido Paterno"))}}
        {{$errors->first("apellidopaterno")}}
    </div>
    <div class="form-group">
        {{Form::label('apellidomaterno','Apellido Materno')}}
        {{Form::text('apellidomaterno',$datosDocentes['apellidomaterno'],array('class'=>"form-control",'placeholder'=>"Apellido Materno"))}}
        {{$errors->first("apellidomaterno")}}
    </div>
    <div class="form-group">

        {{Form::label('email','E-Mail')}}
        {{Form::text('email',$datosDocentes['email'],array('class'=>"form-control",'placeholder'=>"correo@correo.com"))}}
        {{$errors->first("email")}}
    </div>
    <div class="form-group">

        {{Form::label('genero','Sexo')}}
        {{Form::select('genero',array('M'=>'Masculino','F'=>'Femenino'),$datosDocentes['genero'],array('class'=>"form-control"))}}
        {{$errors->first("genero")}}
    </div>

    <div class="form-group">
        {{Form::hidden('id',$datosDocentes['id'])}}
    </div>


    {{Form::submit('Actualizar',array('class'=>"btn btn-primary"))}}


    {{Form::close()}}
    <!--codigo para ajustar rut-->

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
    <!--codigo de dropdown-->
    <script type="text/javascript">
        $('#facultad').on('change',function(e){
            console.log(e);

            var fac_id= e.target.value;
            $.get('/ajax-deptcat?fac_id='+fac_id,function(data){

                var departamento= $('#departamento');

                departamento.empty();
                $.each(data,function(index,deptObj){
                    console.log(data);
                    departamento.append('<option value="'+deptObj.id +'">'+deptObj.nombre +'</option>'


                    );
                })

            })
        })
    </script>
@stop