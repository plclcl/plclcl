<?php

class Permiso extends Eloquent {

	protected $table = 'permisos';
	public $timestamps = false;

	public function rol()
	{
		return $this->belongsToMany('Rol');
	}

}