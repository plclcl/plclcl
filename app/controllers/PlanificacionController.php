<?php

class PlanificacionController extends BaseController {

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
    protected  $layout='layouts.test';
	public function showWelcome()
	{
		return View::make('hello');
	}

    public function get_index(){
    return "hola desde Planificacion";
    }



    public function get_crear(){
        $facultades=Facultad::lists('nombre','id');


    $this->layout->contenido=View::make('Planificacion.crearPlanificacion')
                                    ->with('facultades',$facultades);

    }
    public function post_crear(){

    }

    public function get_actualizar(){

    }

    public function post_actualizar(){

    }

    

}
