@extends('layouts.test')
@section('contenido')
    
    {{Form::open(array('url'=>'newdocente/crear','method'=>'post'))}}
  	<legend>Registro De Nuevos Docentes</legend>
    <div class="form-group">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

        {{Form::label('facultad','Facultad')}}
        {{Form::select('facultad',$facultades,Input::old('facultad'),array('class'=>"form-control"))}}
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

        {{Form::label('departamento','Departamento')}}

            {{Form::select('departamento',array(),Input::old('departamento'),array('class'=>"form-control"))}}
        </div>
    </div>

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
          {{Form::text('apellidopaterno',$value=null,array('class'=>"form-control",'placeholder'=>"Apellido Paterno"))}}

      </div>
      <div class="form-group">
          {{Form::label('apellidomaterno','Apellido Materno')}}
          {{Form::text('apellidomaterno',$value=null,array('class'=>"form-control",'placeholder'=>"Apellido Materno"))}}

      </div>
    <div class="form-group">

        {{Form::label('email','E-Mail')}}
        {{Form::text('email',$value=null,array('class'=>"form-control",'placeholder'=>"correo@correo.com"))}}

    </div>
      <div class="form-group">

          {{Form::label('genero','Sexo')}}
          {{Form::select('genero',array('M'=>'Masculino','F'=>'Femenino'),Input::old('genero'),array('class'=>"form-control"))}}

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