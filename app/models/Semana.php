<?php

class Semana extends Eloquent {

	protected $table = 'semanas';
	public $timestamps = false;

	public function unidad()
	{
		return $this->belongsTo('Unidad');
	}

}