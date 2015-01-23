<?php

class Horario extends Eloquent {

	protected $table = 'horario';
	public $timestamps = false;

	public function cursos()
	{
		return $this->belongsToMany('Cursos');
	}

}