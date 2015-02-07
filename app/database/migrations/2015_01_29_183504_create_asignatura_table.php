<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsignaturaTable extends Migration {

	public function up()
	{
		Schema::create('asignatura', function(Blueprint $table) {
			$table->increments('id');
			$table->string('codigo');
			$table->string('nombre');
		});
	}

	public function down()
	{
		Schema::drop('asignatura');
	}
}