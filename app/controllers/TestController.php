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
		return $this->layout->contenido = View::make('portada.inicio');
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

    //prueba del update de docente
    public function dropdownDepartamento(){
        $input=Input::get('fac_id');
        $input=
        $departamento=Departamento::where('fk_facultad','=',$input)->get();

        return Response::json($departamento);
    }

    public function get_update($id){
        $datosDocentes= Docente::find($id);
        $facultades=Facultad::lists('nombre','id');
        //$departamento=$datosDocentes->get('fk_departamento',['fk_departamento']);
        $departamento=Docente::join('departamento','departamento.id','=','docente.fk_departamento','inner')
            ->where('docente.id','=',$id)
            ->get();
        $sFacultad=Facultad::where('id','=',$departamento->lists('fk_facultad'))->lists('id');
        return $this->layout->contenido = View::make('Docente.editarDocente')
                                        ->with('datosDocentes',$datosDocentes)
                                        ->with('facultades',$facultades)
                                        ->with('departamento',$departamento->lists('nombre','id'))
                                        ->with('sFacultad',$sFacultad);

    }

    public function get_crearcarrera(){
        $facultades=Facultad::lists('nombre','id');
        return $this->layout->contenido=View::make('Carrera.crearCarrera')->with('facultades',$facultades);
    }
    public function get_dropdowncarrera(){
        $input=Input::get('esc_id');
        $escuela=Carrera::where('fk_escuela','=',$input)->get();
        //$departamento=Departamento::where('fk_facultad','=',$input)->get();

        return Response::json($escuela);
    }

}
