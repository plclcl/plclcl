@section('contenido')
    <form action="" method="post" role="form">
        {{Form::open()}}
    	<legend>Cambiar Contraseña</legend>

    	<div class="form-group">
            {{Form::label('password','Contraseña')}}
            {{Form::text('password',null)}}
    	</div>
        <div class="form-group">
            {{Form::label('repasswprd','Repetir Contraseña')}}
            {{Form::text('repassword',null)}}
        </div>


{{Form::submit()}}
    	<button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @stop