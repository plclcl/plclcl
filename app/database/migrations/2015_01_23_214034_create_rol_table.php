<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolTable extends Migration {

	public function up()
	{
		Schema::create('rol', function(Blueprint $table) {
			$table->increments('id');
			$table->string('tipo_rol');
		});
	}

	public function down()
	{
		Schema::drop('rol');
	}
}