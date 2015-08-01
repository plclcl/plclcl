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
Route::get('/menu',function(){
    return View::make('Paginas.menu');
});
Route::get('/', 'InicioController@inicio');

Route::get('/dash',function(){

    return View::make('layouts.dashboard');
});
Route::get('/test/1','TestController@portada');


Route::get('/inicio',function(){
    return View::make('vistasprueba.portada');

});
Route::get('/inicio2',function(){
    return View::make('vistasprueba.dashBoard');

});



//Route::post('/login','LoginController@validarusuario');




//Route::get('login', array('uses' => 'LoginController@showLogin'));
//rutas de prueba de querys
Route::get('/query',function(){

    $periodo=2;
    $dia=Horario::where('periodo','=','1')->get();
   // $dia=Horario::where('periodo','=',$periodo)->get();
    return Response::json($dia);
});

Route::get('reset',function(){

    DB::update("ALTER TABLE docente AUTO_INCREMENT=1;");
});

// route to process the form
//logeo de usuarios
Route::get('/login','LoginController@get_login');
Route::post('/login', array('uses' => 'LoginController@post_login'));
//Route::group(['before'=>'auth'],function(){
  //  Route::get('hola',function(){
    //    return "hola dentro de grupo";
    //});

//});


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
//DropDorn de asignaturas con carreras

Route::get('ajax-asigcat',function(){
    $input=Input::get('carrera_id');
    $asignatura=Carrera::find($input)->asignaturas()->get();
    return Response::json($asignatura);
});

//dropdown diasPeriodos
Route::get('ajax-dia',function(){
    $periodo=Input::get('p_id');
    $dia=Horario::where('periodo','=',$periodo)->get();
    return Response::json($dia);

});
//Asignatura
Route::controller('asignatura','AsignaturaController');
Route::controller('asignatura/asociar','AsignaturaCarreraController');
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

// Cursos
Route::controller('/curso', 'CursoController');
//Unidad
Route::controller('/unidad','UnidadController');
//contenido Unidad
Route::controller('/contenido','ContenidoController');
//Semana
Route::controller('/semana','SemanaController');
