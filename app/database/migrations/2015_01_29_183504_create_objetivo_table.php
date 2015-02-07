<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObjetivoTable extends Migration {

	public function up()
	{
		Schema::create('objetivo', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->bigInteger('fk_planificacion')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('objetivo');
	}
}