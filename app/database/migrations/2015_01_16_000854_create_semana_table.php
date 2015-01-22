<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSemanaTable extends Migration {

	public function up()
	{
		Schema::create('semana', function(Blueprint $table) {
			$table->increments('id');
			$table->date('fechainicial');
			$table->integer('numanual');
			$table->integer('numsemestral');
		});
	}

	public function down()
	{
		Schema::drop('semana');
	}
}