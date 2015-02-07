<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('docente', function(Blueprint $table) {
			$table->foreign('fk_departamento')->references('id')->on('departamento')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('departamento', function(Blueprint $table) {
			$table->foreign('fk_facultad')->references('id')->on('facultad')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('carrera', function(Blueprint $table) {
			$table->foreign('fk_escuela')->references('id')->on('escuela')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('escuela', function(Blueprint $table) {
			$table->foreign('fk_facultad')->references('id')->on('facultad')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('cursos', function(Blueprint $table) {
			$table->foreign('docente')->references('id')->on('docente')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('cursos', function(Blueprint $table) {
			$table->foreign('asignatura_id')->references('id')->on('asignatura')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('asignatura_carrera', function(Blueprint $table) {
			$table->foreign('carrera_id')->references('id')->on('carrera')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('asignatura_carrera', function(Blueprint $table) {
			$table->foreign('asignatura_id')->references('id')->on('asignatura')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('planificacion', function(Blueprint $table) {
			$table->foreign('fk_facultad')->references('id')->on('facultad')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('planificacion', function(Blueprint $table) {
			$table->foreign('fk_escuela')->references('id')->on('escuela')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('planificacion', function(Blueprint $table) {
			$table->foreign('fk_carrera')->references('id')->on('carrera')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('planificacion', function(Blueprint $table) {
			$table->foreign('fk_asignatura')->references('id')->on('asignatura')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('planificacion', function(Blueprint $table) {
			$table->foreign('fk_profesor')->references('id')->on('docente')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('unidad', function(Blueprint $table) {
			$table->foreign('semana_fk')->references('id')->on('semana')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('unidad', function(Blueprint $table) {
			$table->foreign('fk_planificacion')->references('id')->on('planificacion')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('contenidounidad', function(Blueprint $table) {
			$table->foreign('fk_unidad')->references('id')->on('unidad')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('objetivo', function(Blueprint $table) {
			$table->foreign('fk_planificacion')->references('id')->on('planificacion')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('docente_rol', function(Blueprint $table) {
			$table->foreign('docente_id')->references('id')->on('docente')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('docente_rol', function(Blueprint $table) {
			$table->foreign('rol_id')->references('id')->on('rol')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('permiso_rol', function(Blueprint $table) {
			$table->foreign('fk_rol')->references('id')->on('rol')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('permiso_rol', function(Blueprint $table) {
			$table->foreign('fk_permiso')->references('id')->on('permiso')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('curso_horario', function(Blueprint $table) {
			$table->foreign('curso_id')->references('id')->on('cursos')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('curso_horario', function(Blueprint $table) {
			$table->foreign('horario_id')->references('id')->on('horario')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('docente', function(Blueprint $table) {
			$table->dropForeign('docente_fk_departamento_foreign');
		});
		Schema::table('departamento', function(Blueprint $table) {
			$table->dropForeign('departamento_fk_facultad_foreign');
		});
		Schema::table('carrera', function(Blueprint $table) {
			$table->dropForeign('carrera_fk_escuela_foreign');
		});
		Schema::table('escuela', function(Blueprint $table) {
			$table->dropForeign('escuela_fk_facultad_foreign');
		});
		Schema::table('cursos', function(Blueprint $table) {
			$table->dropForeign('cursos_docente_foreign');
		});
		Schema::table('cursos', function(Blueprint $table) {
			$table->dropForeign('cursos_asignatura_id_foreign');
		});
		Schema::table('asignatura_carrera', function(Blueprint $table) {
			$table->dropForeign('asignatura_carrera_carrera_id_foreign');
		});
		Schema::table('asignatura_carrera', function(Blueprint $table) {
			$table->dropForeign('asignatura_carrera_asignatura_id_foreign');
		});
		Schema::table('planificacion', function(Blueprint $table) {
			$table->dropForeign('planificacion_fk_facultad_foreign');
		});
		Schema::table('planificacion', function(Blueprint $table) {
			$table->dropForeign('planificacion_fk_escuela_foreign');
		});
		Schema::table('planificacion', function(Blueprint $table) {
			$table->dropForeign('planificacion_fk_carrera_foreign');
		});
		Schema::table('planificacion', function(Blueprint $table) {
			$table->dropForeign('planificacion_fk_asignatura_foreign');
		});
		Schema::table('planificacion', function(Blueprint $table) {
			$table->dropForeign('planificacion_fk_profesor_foreign');
		});
		Schema::table('unidad', function(Blueprint $table) {
			$table->dropForeign('unidad_semana_fk_foreign');
		});
		Schema::table('unidad', function(Blueprint $table) {
			$table->dropForeign('unidad_fk_planificacion_foreign');
		});
		Schema::table('contenidounidad', function(Blueprint $table) {
			$table->dropForeign('contenidounidad_fk_unidad_foreign');
		});
		Schema::table('objetivo', function(Blueprint $table) {
			$table->dropForeign('objetivo_fk_planificacion_foreign');
		});
		Schema::table('docente_rol', function(Blueprint $table) {
			$table->dropForeign('docente_rol_docente_id_foreign');
		});
		Schema::table('docente_rol', function(Blueprint $table) {
			$table->dropForeign('docente_rol_rol_id_foreign');
		});
		Schema::table('permiso_rol', function(Blueprint $table) {
			$table->dropForeign('permiso_rol_fk_rol_foreign');
		});
		Schema::table('permiso_rol', function(Blueprint $table) {
			$table->dropForeign('permiso_rol_fk_permiso_foreign');
		});
		Schema::table('curso_horario', function(Blueprint $table) {
			$table->dropForeign('curso_horario_curso_id_foreign');
		});
		Schema::table('curso_horario', function(Blueprint $table) {
			$table->dropForeign('curso_horario_horario_id_foreign');
		});
	}
}