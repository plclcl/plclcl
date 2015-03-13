<?php

class LoginController extends BaseController {

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

	public function get_login(){
		return $this->layout->contenido = View::make('login.login');
	}

	public function post_login(){
		$datosLogin= array(
			'rut'=>Input::get('rut'),
			'password'=>Input::get('password')
		);

if (Auth::attempt($datosLogin)){
	return "login ok";
		}else{
			return 'login fail';
		}
	}

/*
	public function validarusuario(){
		/*
		$datousuario = array(
				'rut'=>Input::get('rut'),
				'contrasena'=>Input::get('contrasena')
		);

		$autentifica= Docente::where('rut','=',Input::get('rut'))->where('contrasena','=',Input::get('contrasena'));

		if($autentifica){
			return "usuario valido";
		}
		else{
			return Redirect::to('/')->withErrors('login_errors',true);
		}
	}
*/
}
