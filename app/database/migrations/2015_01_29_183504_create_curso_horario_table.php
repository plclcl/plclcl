<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCursoHorarioTable extends Migration {

	public function up()
	{
		Schema::create('curso_horario', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('curso_id')->unsigned();
			$table->bigInteger('horario_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('curso_horario');
	}
}