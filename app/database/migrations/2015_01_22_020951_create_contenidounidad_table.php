<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContenidounidadTable extends Migration {

	public function up()
	{
		Schema::create('contenidounidad', function(Blueprint $table) {
			$table->increments('id');
			$table->string('contenido');
			$table->string('actividad');
			$table->bigInteger('fk_unidad')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('contenidounidad');
	}
}