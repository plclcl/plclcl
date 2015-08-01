<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacultadesTable extends Migration {

	public function up()
	{
		Schema::create('facultades', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
		});
	}

	public function down()
	{
		Schema::drop('facultades');
	}
}