@extends('layouts.test')
@section('contenido')

    {{Form::open()}}
    <legend>Crear Carreras</legend>
    <div class="form-group">
        {{Form::label('facultad','Facultad')}}
        {{Form::select('facultad',$facultades,$sFacultad,array('class'=>"form-control"))}}
        {{$errors->first("facultad")}}
    </div>

    </div>
    <div class="form-group">
        {{Form::label('escuela','Escuela')}}
        {{Form::select('escuela',$escuela,Input::old('escuela'),array('class'=>"form-control"))}}

    </div>
    <div class="form-group">
        {{Form::label('codigo','Codigo')}}
        {{Form::text('codigo',$datosCarrera['codigo'],array('class'=>"form-control"))}}
    </div>
    <div class="form-group">
        {{Form::label('nombre','Nombre Carrera')}}
        {{Form::text('nombre',$datosCarrera['nombre'],array('class'=>"form-control"))}}
    </div>




    {{Form::submit('crear',array('class'=>'btn btn-primary'))}}

    {{Form::close()}}

    <!--codigo de dropdown-->
    <script type="text/javascript">
        $('#facultad').on('change',function(e){
            console.log(e);

            var escu_id= e.target.value;
            $.get('/ajax-escucat?escu_id='+escu_id,function(data){

                var escuela= $('#escuela');

                escuela.empty();
                $.each(data,function(index,escuObj){
                    console.log(data);
                    escuela.append('<option value="'+escuObj.id +'">'+escuObj.nombre +'</option>'


                    );
                })

            })
        })
    </script>
@stop