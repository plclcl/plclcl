<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'InicioController@inicio');

Route::get('/dash',function(){

    return View::make('layouts.dashboard');
});


//Route::post('/login','LoginController@validarusuario');


Route::controller('/prueba','TestController');

//Route::get('login', array('uses' => 'LoginController@showLogin'));
//rutas de prueba de querys
Route::get('/query',function(){
        $nombre=Asignatura_carrera::join('asignatura','asignatura.id','=','asignatura_carrera.asignatura_id','inner')
                                    ->join('carrera','carrera.id','=','asignatura_carrera.carrera_id','inner')
                                    ->where('carrera_id','=','1');
   // $asignatura=Asignatura::join('asignatura_carrera','asignatura_carrera.asignatura_id','=','asignatura.id','inner')
    //    ->join('carrera','carrera.id','=','asignatura_carrera.carrera_id','inner')
    //->where('');
    return $nombre;
});

// route to process the form
//logeo de usuarios
Route::get('/login','LoginController@get_login');
Route::post('/login', array('uses' => 'LoginController@post_login'));
////////////////////////////////////////////////////////////////////////////////////////////////////
//******************************rutas de aplicacion******************************/
//DropDown de Departamentos
Route::get('ajax-deptcat',function (){
    $input=Input::get('facultad_id');
    $departamento=Departamento::where('fk_facultad','=',$input)->get();

    return Response::json($departamento);
});
//DropDown de Escuelas
Route::get('ajax-escucat',function(){
    $input=Input::get('facultad_id');
    $escuela=Escuela::where('fk_facultad','=',$input)->get();
    return Response::json($escuela);
});
//DropDown de Carreras
Route::get('ajax-carrcat',function(){
    $input=Input::get('escuela_id');
    $carrera=Carrera::where('fk_escuela','=',$input)->get();
    return Response::json($carrera);
});
//Docentes
Route::controller('/docente','DocenteController');

//Horario

Route::controller('/horario','HorarioController');

//Carrera

Route::controller('/carrera','CarreraController');

//Rol

Route::controller('/rol','RolController');

//Permisos

Route::controller('/permiso','PermisoController');

//Planificacion
Route::controller('/planificacion','PlanificacionController');