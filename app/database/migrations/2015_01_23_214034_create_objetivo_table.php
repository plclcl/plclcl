<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObjetivoTable extends Migration {

	public function up()
	{
		Schema::create('objetivo', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
		});
	}

	public function down()
	{
		Schema::drop('objetivo');
	}
}