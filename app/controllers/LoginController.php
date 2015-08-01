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
        if(Auth::check()){
            return Redirect::to('/');
        }
		return $this->layout->contenido = View::make('login.login');
	}

	public function post_login(){
		$datosLogin= array(
			'rut'=>Input::get('rut'),
			'password'=>Input::get('password')
		);

        if (Auth::attempt($datosLogin)){
            $usuario=Docente::whereRaw('rut=?',[Input::get('rut')])->get();
            
	        return Response::json($usuario);
		}else{
			return 'login fail';
		}
        
	}
    public function get_logOut(){
        Auth::logout();

        return Redirect::to('login')->with('error_message','Session Finalizada');
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
