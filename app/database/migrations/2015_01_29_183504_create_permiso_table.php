<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermisoTable extends Migration {

	public function up()
	{
		Schema::create('permiso', function(Blueprint $table) {
			$table->increments('id');
			$table->string('tipo_permiso');
		});
	}

	public function down()
	{
		Schema::drop('permiso');
	}
}