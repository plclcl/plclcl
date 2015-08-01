<?php

class ContenidoController extends BaseController {

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
        return 'hola desde Contenido Unidad';

    }

    public function get_create(){
        $this->layout->contenido=View::make('ContenidoUnidad.crearContenido');
    }
    public function post_create(){}

    public function get_update(){}
    public function post_update(){}

}
