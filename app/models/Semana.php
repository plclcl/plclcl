<?php

class Semana extends Eloquent {

	protected $table = 'semana';
	public $timestamps = false;

	public function unidad()
	{
		return $this->belongsTo('Unidad');
	}

}