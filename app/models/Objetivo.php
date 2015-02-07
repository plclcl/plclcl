<?php

class Objetivo extends Eloquent {

	protected $table = 'objetivo';
	public $timestamps = false;

	public function planificacion()
	{
		return $this->belongsTo('Planificacion');
	}

}