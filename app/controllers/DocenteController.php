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

    //public function showWelcome()
   // {
    //    return View::make('hello');
   // }
    protected $layout='layouts.test';

    public function get_docente(){
        $datosDocente=Docente::all();
        return $this->layout->contenido=View::make('docente.docente',compact("datosDocente"));
    }
    public function get_add(){
        return $this->layout->contenido = View::make('docente.add2');
    }
    public function post_add(){
        $inputs=Input::all();

        $docente= new Docente();
        $docente->rut= $inputs["rut"];
        $docente->nombres=$inputs["nombres"];
        $docente->apellidos=$inputs["apellidos"];
        $docente->save();
        return Redirect::to('p/docente/add');
    }

    public function get_update(){
        $datosDocente=Docente::all();
        return $this->layout->contenido=View::make('docente.docente',compact("datosDocente"));

    }
    public function post_update(){
        $inputs=Input::all();

        $docente= Docente::find($inputs["pk"]);
        $docente->rut= $inputs["rut"];
        $docente->nombres=$inputs["nombres"];
        $docente->apellidos=$inputs["apellidos"];
        $docente->save();
        return Redirect::to('p/docente');
    }

    public function get_Eliminar($pk = null){
        $docente= Docente::find($pk);
        $docente->delete();
        return Redirect::to('p/docente');

    }

}