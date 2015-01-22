<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanificacionTable extends Migration {

	public function up()
	{
		Schema::create('planificacion', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('facultad')->unsigned()->nullable();
			$table->bigInteger('fk_escuela')->unsigned();
			$table->bigInteger('fk_carrera')->unsigned();
			$table->bigInteger('fk_asignatura')->unsigned();
			$table->bigInteger('fk_profesor')->unsigned();
			$table->string('fe');
			$table->string('semestre');
			$table->bigInteger('objetivo')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('planificacion');
	}
}