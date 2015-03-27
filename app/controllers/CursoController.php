<?php

class CursoController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
    //CRUD listar, crear, actualizar y borrar
    protected $layout='layouts.test';
	public function get_index(){
        return 'hola desde curso';

    }

    public function get_crear(){

        return $this->layout->contenido=View::make('Curso.createCurso');

    }
    public function post_crear(){
        $input=Input::all();
        $curso=new Cursos();
        $curso->semestre=$input['semestre'];
        $curso->anio=$input['anio'];
        $curso->seccion=$input['seccion'];
        $curso->docente=$input['docente'];//fk_docente
        $curso->asignatura_id=$input['asignatura'];

        $curso->save();
    }

    public function get_update($id){
        $curso=Cursos::find($id);
        return $this->layout->contenido=View::make('Curso.createCurso')->with('curso',$curso);

    }
    public function post_update($id){
        $input=Input::all();
        $curso= Cursos::find($id);

        $curso->semestre=$input['semestre'];
        $curso->anio=$input['anio'];
        $curso->seccion=$input['seccion'];
        $curso->docente=$input['docente'];//fk_docente
        $curso->asignatura_id=$input['asignatura'];

        $curso->save();
    }

}
