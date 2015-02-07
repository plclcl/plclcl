<?php

class Facultad extends Eloquent {

	protected $table = 'facultad';
	public $timestamps = false;

	public function departamentos()
	{
		return $this->hasMany('Departamento', 'fk_facultad');
	}

	public function escuelas()
	{
		return $this->hasMany('Escuela', 'fk_facultad');
	}

}