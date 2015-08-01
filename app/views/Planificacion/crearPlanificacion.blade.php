@extends('layouts.test')
@section('contenido')

    <form action="" method="POST" role="form">
        {{Form::open()}}
    	<legend>Nueva Planificación</legend>

    	<div class="form-group">

            {{Form::label('facultad','Facultad')}}
            {{Form::select('facultad',array('SELECIONE UNA FACULTAD','Facultades'=>$facultades),Input::old('facultad'),array('class'=>'form-control','placeholder'=>'Seleccione Facultad'))}}

    	</div>
        <div class="form-group">

            {{Form::label('escuela','Escuela')}}
            {{Form::select('escuela',array('SELECIONE UNA ESCUELA'),Input::old('escuela'),array('class'=>'form-control'))}}

        </div>
        <div class="form-group">

            {{Form::label('carrera','Carrera')}}
            {{Form::select('carrera',array('SELECIONE UNA CARRERA'),Input::old('carrera'),array('class'=>'form-control'))}}

        </div>

        <div class="form-group">

            {{Form::label('asignatura','Asignatura')}}
            {{Form::select('asignatura',array('SELECIONE UNA ASIGNATURA'),Input::old('asignatura'),array('class'=>'form-control'))}}

        </div>
        <div class="form-group">

            {{Form::label('fechaformulacion','Fecha')}}
            {{Form::input('fechaformulacion','fechaformulacion',null,array('class'=>'form-control'))}}


        </div>



    	<button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!--codigo de dropdown Escuela-->
    <script type="text/javascript">
        $('#facultad').on('change',function(e){
             console.log(e);

            var facultad_id= e.target.value;
            $.get('/ajax-escucat?facultad_id='+facultad_id,function(data){

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
    <!--codigo de dropdown Carrera-->
    <script type="text/javascript">
        $('#escuela').on('change',function(e){
             console.log(e);

            var escuela_id= e.target.value;
            $.get('/ajax-carrcat?escuela_id='+escuela_id,function(data){

                var carrera= $('#carrera');

                carrera.empty();
                $.each(data,function(index,carrObj){
                      console.log(data);
                    carrera.append('<option value="'+carrObj.id +'">'+carrObj.nombre +'</option>'


                    );
                })

            })
        })
    </script>
    <!--codigo de dropdown Carrera-->
    <script type="text/javascript">
        $('#carrera').on('change',function(e){
             console.log(e);

            var carrera_id= e.target.value;
            $.get('/ajax-asigcat?carrera_id='+carrera_id,function(data){

                var asignatura= $('#asignatura');

                asignatura.empty();
                $.each(data,function(index,asigObj){
                      console.log(data);
                    asignatura.append('<option value="'+asigObj.id +'">'+asigObj.nombre +'</option>'


                    );
                })

            })
        })
    </script>
    @stop