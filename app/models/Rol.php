<?php

class Rol extends Eloquent {

	protected $table = 'roles';
	public $timestamps = false;

	public function docente()
	{
		return $this->belongsToMany('Docente');
	}

	public function permiso()
	{
		return $this->belongsToMany('Permiso');
	}

}