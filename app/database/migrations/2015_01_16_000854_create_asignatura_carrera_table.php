<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsignaturaCarreraTable extends Migration {

	public function up()
	{
		Schema::create('asignatura_carrera', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('curso_id');
			$table->bigInteger('asignatura_id');
		});
	}

	public function down()
	{
		Schema::drop('asignatura_carrera');
	}
}