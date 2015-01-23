<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermisoRolTable extends Migration {

	public function up()
	{
		Schema::create('permiso_rol', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('fk_rol')->unsigned();
			$table->bigInteger('fk_permiso')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('permiso_rol');
	}
}