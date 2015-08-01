<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermisosRolesTable extends Migration {

	public function up()
	{
		Schema::create('permisos_roles', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('fk_rol')->unsigned();
			$table->bigInteger('fk_permiso')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('permisos_roles');
	}
}