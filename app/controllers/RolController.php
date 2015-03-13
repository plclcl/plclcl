<?php

class RolController extends BaseController {

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

	public function showWelcome()
	{
		return View::make('hello');
	}
    public function get_index(){
        $datosRol= Rol::all();
        $this->layout->contenido= View::make('Rol.index')->with('datosRol',$datosRol);
    }

    public function get_crear(){
        $this->layout->contenido= View::make('Rol.crear');
    }
    public function post_crear(){
        $input=Input::all();
        $rol= new Rol();
        $rol->tipo_rol=$input['tipo_rol'];
        $rol->save();
        }
    public function get_actualizar($id){
        $datoRol=Rol::find($id);
        $this->layout->contenido= View::make('Rol.actualizar')->with('datoRol',$datoRol);

    }
    public function post_actualizar($id){
        $inputs= Input::all();
        $rol = Rol::find($id);
        $rol-> tipo_rol=$inputs['tipo_rol'];
        $rol->save();

    }
}
