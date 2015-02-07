<?php

class TestController extends BaseController {

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



	public function get_portada(){
		return $this->layout->contenido = View::make('portada.index2');
	}
	public function get_testportada(){
		return View::make('test.portada');
	}
	public function get_registro(){
		return $this->layout->contenido = View::make('test.registro');
	}
	public function get_planificacion(){
		return $this->layout->contenido = View::make('test.planificacion');
	}
	public function get_vista(){
		//return $this->layout->contenido = View::make('vistasprueba.formNuevodocente');
		return $this->layout->contenido = View::make('vistasprueba.login');
	}
	public function post_vista(){
		$datoslogeo=array(
							'rut'=>Input::get('rut'),
							'password'=>Input::get('contrasena')
							);
		if(Auth::attempt($datoslogeo,true)){
			return "logeo aceptado";
		}else{
			return "vete a la mierda";

		}


	}

	/**
	 * @return \Illuminate\View\View
     */
	public function post_registro(){
		//$data= Facultad::lists('nombre','id');
		//return View::make('test.registro',compact($data));
		$facultades=Facultad::lists('nombre','id');
		return View::make('test.registro')->with(['facultades' => $facultades]);
	}

	public function semana(){
		return $this->layout->contenido = View::make('semana.add');
	}

}
