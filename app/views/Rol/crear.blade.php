@include('layouts.test')

@section('contenido')

        {{Form::open(array('url'=>'rol/crear','method'=>'post'))}}
    	<legend>Crear Roles</legend>

    	<div class="form-group">
    		{{Form::label('tipo_rol','Tipo Rol')}}
            {{Form::text('tipo_rol',null,array('class'=>"form-control"))}}
    	</div>

    {{Form::submit('Agregar',array('class'=>"btn btn-primary"))}}
    {{Form::close()}}

    @stop
