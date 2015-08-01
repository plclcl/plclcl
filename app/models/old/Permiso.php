<?php

class Permiso extends Eloquent {

	protected $table = 'permiso';
	public $timestamps = false;

	public function rol()
	{
		return $this->belongsToMany('Rol');
	}

}