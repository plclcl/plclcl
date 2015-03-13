<?php

class PermisoController extends BaseController {

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
        $datosPermiso=Permiso::all();
        return $this->layout->contenido=View::make('Permisos.index')->with('datosPermiso',$datosPermiso);
    }
    public function get_crear(){
        return $this->layout->contenido=View::make('Permisos.crear');
    }
    public function post_crear(){
        $input=Input::all();
        $permiso= new Permiso();
        $permiso->tipo_permiso=$input['tipo_permiso'];
        $permiso->save();

    }

    public function get_actualizar($id){
        $datoPermiso=Permiso::find($id);
        return $this->layout->contenido= View::make('Rol.actualizar')->with('datoPermiso',$datoPermiso);
    }

    public function post_actualizar($id){

        $inputs= Input::all();
        $permiso = Permiso::find($id);
        $permiso-> tipo_permiso=$inputs['tipo_permiso'];
        $permiso->save();

    }



}
