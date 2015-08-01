@section('contenido')

    {{Form::open()}}
    <legend>Form Title</legend>

    <div class="form-group">
        {{Form::label('contenido','Tema')}}
        {{Form::text('Contenido',null,array('class'=>'form-control'))}}
    </div>
    <div class="form-group">
        {{Form::label('actividad','Actividad')}}
        {{Form::textarea('actividad',null,array('class'=>'form-control'))}}
    </div>



    	<button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @stop