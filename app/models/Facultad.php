<?php

class Facultad extends Eloquent {

	protected $table = 'facultad';
	public $timestamps = false;

	public function departamentos()
	{
		return $this->hasMany('Departamento', 'fk_facultad');
	}

}