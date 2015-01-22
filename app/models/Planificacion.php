<?php

class Planificacion extends Eloquent {

	protected $table = 'planificacion';
	public $timestamps = false;

	public function facultad()
	{
		return $this->belongsTo('Facultad');
	}

	public function escuela()
	{
		return $this->belongsTo('Escuela');
	}

	public function carrera()
	{
		return $this->belongsTo('Carrera');
	}

	public function asignatura()
	{
		return $this->belongsTo('Asignatura');
	}

	public function profesor()
	{
		return $this->belongsTo('Docente');
	}

	public function unidades()
	{
		return $this->hasMany('Unidad', 'fk_forma');
	}

}