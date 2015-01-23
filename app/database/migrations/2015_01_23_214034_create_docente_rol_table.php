<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocenteRolTable extends Migration {

	public function up()
	{
		Schema::create('docente_rol', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('docente_id')->unsigned();
			$table->bigInteger('rol_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('docente_rol');
	}
}