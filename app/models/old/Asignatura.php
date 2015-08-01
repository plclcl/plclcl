<?php

class Asignatura extends Eloquent {

	protected $table = 'asignatura';
	public $timestamps = false;

	public function carreras()
	{
		return $this->belongsToMany('Carrera');
	}

	public function cursos()
	{
		return $this->hasMany('Cursos', 'asignatura_id');
	}

}