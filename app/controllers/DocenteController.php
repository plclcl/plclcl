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

	public function get_create(){
		$facultades=Facultad::lists('nombre','id');

		return $this->layout->contenido = View::make('Docente.crearDocente')
			->with('facultades',$facultades);

	}

	public function post_create(){
		$inputs= Input::all();
        $validar = Docente::validaDocente($inputs);


        if($validar->fails()){
            return Redirect::back()->withErrors($validar->messages());

        }else {

		    $docente= new Docente();
		    $docente->rut = $inputs["rut"];
		    $docente->password = Hash::make($inputs["rut"]);
            $docente->fk_departamento = $inputs['departamento'];
		    $docente->nombre = $inputs["nombre"];
		    $docente->apellidopaterno = $inputs["apellidopaterno"];
		    $docente->apellidomaterno = $inputs["apellidomaterno"];
		    $docente->email = $inputs["email"];
		    $docente->genero = $inputs["genero"];
		    $docente->save();
            Session::flash('mensaje','el registro fue correctamente acualizado');
        }
    }

    public function get_show($id){
        $docente=Docente::find($id);

        return $this->layout->contenido= View::make('Docente.detalleDocente')->with('docente',$docente);
    }

    public function get_update($id){
        $datosDocentes= Docente::find($id);
        $facultades=Facultad::lists('nombre','id');
        $departamento=Docente::join('departamentos','departamento.id','=','docentes.fk_departamento','inner')
            ->where('docentes.id','=',$id)
            ->get();
        $sFacultad=Facultad::where('id','=',$departamento->lists('fk_facultad'))->lists('id');
        return $this->layout->contenido = View::make('Docente.editarDocente')
                                                    ->with('datosDocentes',$datosDocentes)
                                                    ->with('facultades',$facultades)
                                                    ->with('departamento',$departamento->lists('nombre','id'))
                                                    ->with('sFacultad',$sFacultad);

    }

    public function post_update($id){

        $inputs=Input::all();
        $validar = Docente::validaDocente($inputs);


        if($validar->fails()){
            return Redirect::back()->withErrors($validar->messages());

        }else {
        $docente= Docente::find($id);
        $docente->rut = $inputs["rut"];
        $docente->nombre = $inputs["nombre"];
        $docente->apellidopaterno = $inputs["apellidopaterno"];
        $docente->apellidomaterno = $inputs["apellidomaterno"];
        $docente->email = $inputs["email"];
        $docente->genero = $inputs["genero"];
        $docente->fk_departamento = $inputs["departamento"];
        $docente->save();
        }
    }
    public function get_changepwd(){
        $this->layout->contenido=View::make('Docente.cambioPWD');
    }
    public function post_changepwd(){
        $inputs=Input::all();

    }


}
