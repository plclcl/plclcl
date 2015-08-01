@extends('layouts.test')

@section('contenido')

    @if ( $errors->count() > 0 )
        <p>The following errors have occurred:</p>

        <ul>
            @foreach( $errors->all() as $message )
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    @endif

    {{Form::open(array('url'=>'docente/create','method'=>'post'))}}
  	<legend>Registro De Nuevos Docentes</legend>

    <div class="form-group">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

        {{Form::label('facultad','Facultad')}}
        {{Form::select('facultad',$facultades,Input::old('facultad'),array('class'=>"form-control"))}}
            {{$errors->first("facultad")}}
        </div>

    </div>

    <div class="form-group">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

        {{Form::label('departamento','Departamento')}}
        {{Form::select('departamento',array(),Input::old('departamento'),array('class'=>"form-control"))}}
            {{$errors->first("departamento")}}
        </div>
    </div>

      <div class="form-group">

          {{Form::label('rut','RUN')}}
          {{Form::text('rut',$value=null,array('class'=>"form-control",'placeholder'=>"12.345.678-9"))}}
          {{$errors->first("rut")}}
      </div>

      <div class="form-group">

          {{Form::label('nombre','Nombre')}}
          {{Form::text('nombre',$value=null,array('class'=>"form-control",'placeholder'=>"Nombre"))}}
          {{$errors->first("nombre")}}
  	</div>

      <div class="form-group">
          {{Form::label('apellidopaterno','Apellido Paterno')}}
          {{Form::text('apellidopaterno',$value=null,array('class'=>"form-control",'placeholder'=>"Apellido Paterno"))}}
          {{$errors->first("apellidopaterno")}}
      </div>
      <div class="form-group">
          {{Form::label('apellidomaterno','Apellido Materno')}}
          {{Form::text('apellidomaterno',$value=null,array('class'=>"form-control",'placeholder'=>"Apellido Materno"))}}
          {{$errors->first("apellidomaterno")}}
      </div>
    <div class="form-group">

        {{Form::label('email','E-Mail')}}
        {{Form::text('email',$value=null,array('class'=>"form-control",'placeholder'=>"correo@correo.com"))}}
        {{$errors->first("email")}}
    </div>
      <div class="form-group">

          {{Form::label('genero','Sexo')}}
          {{Form::select('genero',array('M'=>'Masculino','F'=>'Femenino'),Input::old('genero'),array('class'=>"form-control"))}}
          {{$errors->first("genero")}}
      </div>




    {{Form::submit('Crear',array('class'=>"btn btn-primary"))}}


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
                $inputRut.closest("div").addClass("has-success");
            }
        });
    </script>
    <!--codigo de dropdown-->
    <script type="text/javascript">
       $('#facultad').on('change',function(e){
           console.log(e);

           var facultad_id= e.target.value;
           $.get('/ajax-deptcat?facultad_id='+facultad_id,function(data){

               var departamento= $('#departamento');

                departamento.empty();
               $.each(data,function(index,deptObj){
                   console.log(data);
                   departamento.append('<option value="'+deptObj.id +'">'+deptObj.nombre +'</option>'


                   ).attr('selected','selected');
               })

           })
       })
    </script>
    @stop