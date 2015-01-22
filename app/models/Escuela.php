<?php

class Escuela extends Eloquent {

	protected $table = 'escuela';
	public $timestamps = false;

	public function departamento()
	{
		return $this->belongsTo('Departamento');
	}

}