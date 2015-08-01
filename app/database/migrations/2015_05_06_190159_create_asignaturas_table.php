<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsignaturasTable extends Migration {

	public function up()
	{
		Schema::create('asignaturas', function(Blueprint $table) {
			$table->increments('id');
			$table->string('codigo');
			$table->string('nombre');
		});
	}

	public function down()
	{
		Schema::drop('asignaturas');
	}
}