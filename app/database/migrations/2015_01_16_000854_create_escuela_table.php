<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEscuelaTable extends Migration {

	public function up()
	{
		Schema::create('escuela', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->bigInteger('fk_departamento')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('escuela');
	}
}