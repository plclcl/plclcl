<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCursosTable extends Migration {

	public function up()
	{
		Schema::create('cursos', function(Blueprint $table) {
			$table->increments('id');
			$table->string('semestre');
			$table->string('anio');
			$table->string('seccion');
			$table->bigInteger('docente')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('cursos');
	}
}