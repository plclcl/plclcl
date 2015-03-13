@include('layouts.test')

@section('contenido')

    {{Form::open(array('url'=>'permiso/crear','method'=>'post'))}}
    <legend>Crear Roles</legend>

    <div class="form-group">
        {{Form::label('tipo_permiso','Tipo Permiso')}}
        {{Form::text('tipo_permiso',null,array('class'=>"form-control"))}}
    </div>

    {{Form::submit('Agregar',array('class'=>"btn btn-primary"))}}
    {{Form::close()}}

@stop