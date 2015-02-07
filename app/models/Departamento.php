<?php

use Illuminate\Support\Facades\DB;

class Departamento extends Eloquent {

	protected $table = 'departamento';
	public $timestamps = false;

	public function facultad()
	{
		return $this->belongsTo('Facultad');
	}

	public function docentes()
	{
		return $this->hasMany('Docente', 'fk_departamento');
	}
	//consultas

 public function whereDepartamento($id){
	 return DB::table('departamento')->select('nombre','id')->where('fk_facultad','=',$id)->get();
 }

}