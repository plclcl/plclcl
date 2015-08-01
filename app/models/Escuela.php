<?php

class Escuela extends Eloquent {

	protected $table = 'escuelas';
	public $timestamps = false;

	public function facultad()
	{
		return $this->belongsTo('Facultad');
	}

	public function carreras()
	{
		return $this->hasMany('Carrera', 'fk_escuela');
	}

}