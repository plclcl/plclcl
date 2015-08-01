<?php

class Cursos extends Eloquent {

	protected $table = 'cursos';
	public $timestamps = false;

	public function asignatura()
	{
		return $this->belongsTo('Asignatura');
	}

	public function horarios()
	{
		return $this->belongsToMany('Horario');
	}

}