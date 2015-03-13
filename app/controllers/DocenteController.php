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
        $datosDocentes = Docente::all();
		return $this->layout->contenido = View::make('Docente.listarDocentes')->with('datosDocentes',$datosDocentes);
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
        $reglas= array(
            'rut'=>'required|min:10',
            'nombre'=> 'required | alpha|min:4',
            'apellidopaterno'=>'required |alpha|min:3',
            'apellidomaterno'=>'required |alpha|min:3',
            'fk_departamento'=>'required',
            'genero'=>'required',

        );
        $mensajes=array(
            "required"=>"este campo es Obligatorio",
            "min"=>"debe tener un minimo de 4 caracteres",
            "alpha"=>"solo se permiten letras en este campo",
        );

        $validacion= Validator::make($inputs,$reglas,$mensajes);
        if($validacion->fails()){
            return Redirect::back()->withErrors($validacion);
        }else {
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
            Session::flash('mensaje','el registro fue correctamente acualizado');
        }
	}
    public function get_detalle($id){
        $docente=Docente::find($id);
    //return Response::json($Docente);
        return $this->layout->contenido= View::make('Docente.detalleDocente')->with('docente',$docente);
    }

    public function get_actualizar($id){
        $datosDocentes= Docente::find($id);
        $facultades=Facultad::lists('nombre','id');
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
    public function post_actualizar(){

        $inputs= Input::all();
        $reglas= array(
            'rut'=>'required|min:10',
            'nombre'=> 'required | alpha|min:4',
            'apellidopaterno'=>'required |alpha|min:3',
            'apellidomaterno'=>'required |alpha|min:3',
            'fk_departamento'=>'required',
            'genero'=>'required',

        );
        $mensajes=array(
            "required"=>"este campo es Obligatorio",
            "min"=>"debe tener un minimo de 4 caracteres",
            "alpha"=>"solo se permiten letras en este campo",
        );

        $validacion= Validator::make($inputs,$reglas,$mensajes);
        if($validacion->fails()){
            return Redirect::back()->withErrors($validacion);
        }else {
            $docente = Docente::find($inputs["id"]);
            $docente->rut = $inputs["rut"];
            $docente->nombre = $inputs["nombre"];
            $docente->apellidopaterno = $inputs["apellidopaterno"];
            $docente->apellidomaterno = $inputs["apellidomaterno"];
            $docente->email = $inputs["email"];
            $docente->genero = $inputs["genero"];
            $docente->fk_departamento = $inputs["departamento"];
            $docente->save();
            Session::flash('mensaje','el registro fue correctamente acualizado');
        }
    }
	public function showWelcome()
	{
		return View::make('hello');

	}

}
