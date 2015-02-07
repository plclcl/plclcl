<?php

class Escuela extends Eloquent {

	protected $table = 'escuela';
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