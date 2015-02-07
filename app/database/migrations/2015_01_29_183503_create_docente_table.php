<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocenteTable extends Migration {

	public function up()
	{
		Schema::create('docente', function(Blueprint $table) {
			$table->increments('id');
			$table->string('rut');
			$table->string('password');
			$table->string('nombre');
			$table->string('apellidopaterno');
			$table->string('apellidomaterno');
			$table->string('genero');
			$table->string('email');
			$table->softDeletes();
			$table->bigInteger('fk_departamento')->unsigned();
			$table->rememberToken();
		});
	}

	public function down()
	{
		Schema::drop('docente');
	}
}