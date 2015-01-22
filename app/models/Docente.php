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

}