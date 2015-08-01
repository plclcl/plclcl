<?php

class Unidad extends Eloquent {

	protected $table = 'unidad';
	public $timestamps = false;

	public function semana()
	{
		return $this->hasMany('Semana');
	}

	public function detalleunidad()
	{
		return $this->hasMany('Contenidounidad', 'fk_unidad');
	}

	public function forma()
	{
		return $this->belongsTo('Planificacion');
	}

}