<?php

class Contenidounidad extends Eloquent {

	protected $table = 'contenidounidad';
	public $timestamps = false;

	public function unidad()
	{
		return $this->belongsTo('\Unidad');
	}

}