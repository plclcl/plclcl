<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Docente extends Eloquent {

	protected $table = 'docente';
	public $timestamps = false;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function departamento()
	{
		return $this->belongsTo('Departamento');
	}

	public function planificacion()
	{
		return $this->hasMany('Planificacion', 'fk_profesor');
	}

	public function rol()
	{
		return $this->belongsToMany('Rol');
	}

}