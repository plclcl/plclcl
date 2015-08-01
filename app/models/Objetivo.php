<?php

class Objetivo extends Eloquent {

	protected $table = 'objetivos';
	public $timestamps = false;

	public function planificacion()
	{
		return $this->belongsTo('Planificacion');
	}

}