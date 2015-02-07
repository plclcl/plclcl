<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsignaturaCarreraTable extends Migration {

	public function up()
	{
		Schema::create('asignatura_carrera', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('carrera_id')->unsigned();
			$table->bigInteger('asignatura_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('asignatura_carrera');
	}
}