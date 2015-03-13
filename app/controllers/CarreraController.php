<?php

class CarreraController extends BaseController {

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


    /**
     *
     */
    protected $layout='layouts.test';
    public function get_index(){
        $datosCarrera=Carrera::all();
        $this->layout->contenido=View::make('Carrera.index')->with('datosCarrera',$datosCarrera);
    }
    public function get_crear(){
        $facultades=Facultad::lists('nombre','id');
        return $this->layout->contenido=View::make('Carrera.crearCarrera')->with('facultades',$facultades);
    }

    public function post_crear(){
        $input=Input::all();
        $carrera= new Carrera();

        $carrera->codigo=$input['codigo'];
        $carrera->nombre=$input['nombre'];
        $carrera->fk_escuela=$input['escuela'];

        $carrera->save();
    }
    public function get_actualizar($id){
        $datosCarrera=Carrera::find($id);
        $facultades=Facultad::lists('nombre','id');
        $escuela=Carrera::join('escuela','escuela.id','=','carrera.fk_escuela','inner')
            ->where('carrera.id','=',1)
            ->get();
        $sFacultad=Facultad::where('id','=',$escuela->lists('fk_facultad'))->lists('id');

        return $this->layout->contenido = View::make('Carrera.editarCarrera')
                                                ->with('datosCarrera',$datosCarrera)
                                                ->with('facultades',$facultades)
                                                ->with('escuela',$escuela->lists('nombre','id'))
                                                ->with('sFacultad',$sFacultad);

    }
    public function post_actualizar($id){
        $input=Input::all();
        $carrera= Docente::find($id);

        $carrera->codigo=$input['codigo'];
        $carrera->nombre=$input['nombre'];
        $carrera->fk_escuela=$input['escuela'];

        $carrera->save();
    }

}
