<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocentesRolesTable extends Migration {

	public function up()
	{
		Schema::create('docentes_roles', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('docente_id')->unsigned();
			$table->bigInteger('rol_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('docentes_roles');
	}
}