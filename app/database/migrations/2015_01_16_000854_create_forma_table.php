<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormaTable extends Migration {

	public function up()
	{
		Schema::create('forma', function(Blueprint $table) {
			$table->increments('id');
			$table->string('facultad');
			$table->string('escuela');
			$table->string('carrera');
			$table->string('asignatura');
			$table->string('profesor');
			$table->string('fe');
			$table->string('semestre');
			$table->string('objetivo');
		});
	}

	public function down()
	{
		Schema::drop('forma');
	}
}