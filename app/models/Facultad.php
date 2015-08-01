<?php

class Facultad extends Eloquent {

	protected $table = 'facultades';
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