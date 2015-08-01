<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsignaturasCarrerasTable extends Migration {

	public function up()
	{
		Schema::create('asignaturas_carreras', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('carrera_id')->unsigned();
			$table->bigInteger('asignatura_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('asignaturas_carreras');
	}
}