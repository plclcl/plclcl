<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnidadTable extends Migration {

	public function up()
	{
		Schema::create('unidad', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->bigInteger('semana_fk')->unsigned();
			$table->bigInteger('fk_planificacion')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('unidad');
	}
}