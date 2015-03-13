@include('layouts.test')

@section('contenido')

    {{Form::open(array('url'=>'rol/actualizar/','method'=>'post'))}}
    <legend>Actualizar Roles</legend>

    <div class="form-group">
        {{Form::label('tipo_rol','Tipo Rol')}}
        {{Form::text('tipo_rol',$datoRol['tipo_rol'],array('class'=>"form-control"))}}
    </div>

    {{Form::submit('Actualizar',array('class'=>"btn btn-primary"))}}
    {{Form::close()}}

@stop