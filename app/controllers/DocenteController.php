<?php

class DocenteController extends BaseController {

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
		return $this->layout->contenido = View::make('Docente.formNuevodocente');
	}
	public function get_crear(){
		$facultades=Facultad::lists('nombre','id');

		return $this->layout->contenido = View::make('Docente.formNuevodocente')
			->with('facultades',$facultades);

	}

	/**
	 *
     */
	public function dropdownDepartamento(){
	$input=Input::get('fac_id');
	$departamento=Departamento::where('fk_facultad','=',$input)->get();

		return Response::json($departamento);
}
	public function post_crear(){
		$inputs= Input::all();
		$docente=new Docente();
		$docente->rut= $inputs["rut"];
		$docente->password=Hash::make($inputs["rut"]);
		$docente->nombre=$inputs["nombre"];
		$docente->apellidopaterno = $inputs["apellidopaterno"];
		$docente->apellidomaterno = $inputs["apellidomaterno"];
		$docente->email=$inputs["email"];
		$docente->genero=$inputs["genero"];
		$docente->fk_departamento=$inputs["departamento"];
		$docente->save();
	}
	public function showWelcome()
	{
		return View::make('hello');

	}

}
