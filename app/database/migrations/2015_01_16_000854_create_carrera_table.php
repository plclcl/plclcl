<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarreraTable extends Migration {

	public function up()
	{
		Schema::create('carrera', function(Blueprint $table) {
			$table->increments('id');
			$table->string('codigo', 8);
			$table->string('nombre');
		});
	}

	public function down()
	{
		Schema::drop('carrera');
	}
}