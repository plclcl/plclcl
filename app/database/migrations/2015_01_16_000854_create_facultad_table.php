<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacultadTable extends Migration {

	public function up()
	{
		Schema::create('facultad', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
		});
	}

	public function down()
	{
		Schema::drop('facultad');
	}
}