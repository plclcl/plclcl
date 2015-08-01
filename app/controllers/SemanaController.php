<?php

class SemanaController extends BaseController {

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
	|me
	*/

	public function get_index(){
        return "hola desde semana";
    }
    public function get_show($id){}
    public function get_create(){}
    public function post_create(){}
    public function get_update($id){}
    public function post_update($id){}


}
