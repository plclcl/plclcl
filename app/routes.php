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

Route::get('/', function()
{
	return View::make('portada.index');
});

Route::controller('/p','DocenteController');
Route::controller('/d','UnidadController');
Route::controller('/t','TestController');
Route::controller('/s','SemanaController');