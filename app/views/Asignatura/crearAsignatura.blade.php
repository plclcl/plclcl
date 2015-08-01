@extends('layouts.test')
@section('contenido')
    {{Form::open()}}
    	<legend>Agregar Asignatura</legend>

        <div class="form-group">

            {{Form::label('codigo','Codigo')}}
            {{Form::text('codigo',$value=null,array('class'=>"form-control",'placeholder'=>"INF-123"))}}

        </div>
        <div class="form-group">

            {{Form::label('nombre','Asignatura')}}
            {{Form::text('nombre',$value=null,array('class'=>"form-control",'placeholder'=>"Nombre Asignatura"))}}

        </div>


    <a id="btnADD" href="#" class="btn bg-primary">Agregar</a>






    {{Form::submit('Crear',array("class"=>"btn btn-primary"))}}
  <!--  <script>

        var template =  '<div class="form-group">'+
                        '{{Form::label('carreras','CARERAS')}}'+
                        '{{Form::select('carreras',$carreras,null,array('class'=>"form-control"))}}'+
                        '<a id="btnDEL" href="#" class="btn btn-danger">Eliminar</a>'+
                        '</div>';

            $('#btnADD').on('click',function(e){
                e.preventDefault();
                $(this).before(template);
            });

        $(document).on('click','#btnDEL',function(e){
            e.preventDefault();
            $(this).parents('#contenedor').remove();
        })



    </script>-->

    {{Form::close()}}
    @stop