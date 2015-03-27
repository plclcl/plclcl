<?php

class AsignaturaController extends BaseController {

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
    protected $layout='layouts.test';
	public function get_index(){

        return "hola desde asignatura";
    }

    public function get_crear(){
        return $this->layout->contenido=View::make('Asignatura.crearAsignatura');
    }

    public function post_crear(){
        $input=Input::all();
        $asignatura= new Asignatura();

        $asignatura->codigo= $input['codigo'];
        $asignatura->nombre=$input['nombre'];

        $asignatura->save();


    }

    public function get_update($id){
        $asignatura=Asignatura::find($id);
        return $this->layout->contenido=View::make('Asignatura.editarAsignatura')->with('asignatura',$asignatura);
    }
    public function post_update($id){
        $input=Input::all();
        $asignatura=Asignatura::find($id);

        $asignatura->codigo=$input['codigo'];
        $asignatura->nombre=$input['nombre'];

        $asignatura->save();
    }



}
