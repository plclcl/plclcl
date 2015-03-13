<?php

class HorarioController extends BaseController {

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
        $datosHorarios=Horario::all();
        $this->layout->contenido=View::make('Horario.index')->with('datosHorarios',$datosHorarios);
    }

    public function get_crear(){
        $this->layout->contenido= View::make('Horario.crear');
    }

    public function post_crear(){

    }

    public function get_actualizar($id){

    }

    public function post_actualizar($id){

    }



}
