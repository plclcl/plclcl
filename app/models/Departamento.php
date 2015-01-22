<?php

class Departamento extends Eloquent {

	protected $table = 'departamento';
	public $timestamps = false;

	public function facultad()
	{
		return $this->belongsTo('Facultad');
	}

	public function escuelas()
	{
		return $this->hasMany('Escuela', 'fk_departamento');
	}

	public function docentes()
	{
		return $this->hasMany('Docente', 'fk_departamento');
	}

}