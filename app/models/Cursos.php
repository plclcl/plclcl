<?php

class Cursos extends Eloquent {

	protected $table = 'cursos';
	public $timestamps = false;

	public function asignaturas()
	{
		return $this->hasOne('Asignatura');
	}

}