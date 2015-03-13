<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHorarioTable extends Migration {

	public function up()
	{
		Schema::create('horario', function(Blueprint $table) {
			$table->increments('id');
			$table->string('periodo');
			$table->string('dia');
		});
	}

	public function down()
	{
		Schema::drop('horario');
	}
}