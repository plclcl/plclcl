<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('escuela', function(Blueprint $table) {
			$table->foreign('fk_departamento')->references('id')->on('departamento')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('escuela', function(Blueprint $table) {
			$table->dropForeign('escuela_fk_departamento_foreign');
		});
	}
}