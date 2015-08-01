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
        $carreras=Carrera::all()->lists('nombre','id');
        return $this->layout->contenido=View::make('Asignatura.crearAsignatura')->with('carreras',$carreras);
    }

    public function post_crear(){
        $input=Input::all();
        $validar=Asignatura::validate($input);

        if($validar->fails())
        {
            return Redirect::back()->withErrors($validar->messages());
        }else {
            $asignatura = new Asignatura();

            $asignatura->codigo = $input['codigo'];
            $asignatura->nombre = $input['nombre'];

            $asignatura->save();
            //$idcarreras = $input['carreras'];
            //$asignatura->carreras()->attach($idcarreras);
        }

    }

    public function get_update($id){
        $asignatura=Asignatura::find($id);
        return $this->layout->contenido=View::make('Asignatura.editarAsignatura')->with('asignatura',$asignatura);
    }
    public function post_update($id){
        $input=Input::all();
        $validar=Asignatura::validate($input);

        if($validar->fails())
        {
            return Redirect::back()->withErrors($validar->messages());
        }else{
        $asignatura=Asignatura::find($id);

        $asignatura->codigo=$input['codigo'];
        $asignatura->nombre=$input['nombre'];

        $asignatura->save();
            Session::flash('mensaje','el registro fue correctamente Guardado');
        }
    }



}
