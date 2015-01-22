<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContenidoTable extends Migration {

	public function up()
	{
		Schema::create('contenido', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
		});
	}

	public function down()
	{
		Schema::drop('contenido');
	}
}