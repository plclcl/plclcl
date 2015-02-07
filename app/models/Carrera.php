<?php

class Carrera extends Eloquent {

	protected $table = 'carrera';
	public $timestamps = false;

	public function asignaturas()
	{
		return $this->belongsToMany('Asignatura');
	}

	public function planificacion()
	{
		return $this->hasMany('Planificacion', 'fk_carrera');
	}

	public function escuela()
	{
		return $this->belongsTo('Escuela');
	}

}