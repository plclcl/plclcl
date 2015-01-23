<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartamentoTable extends Migration {

	public function up()
	{
		Schema::create('departamento', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->bigInteger('fk_facultad')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('departamento');
	}
}