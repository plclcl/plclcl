<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('docentes', function(Blueprint $table) {
			$table->foreign('fk_departamento')->references('id')->on('departamentos')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('departamentos', function(Blueprint $table) {
			$table->foreign('fk_facultad')->references('id')->on('facultades')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('carreras', function(Blueprint $table) {
			$table->foreign('fk_escuela')->references('id')->on('escuelas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('escuelas', function(Blueprint $table) {
			$table->foreign('fk_facultad')->references('id')->on('facultades')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('cursos', function(Blueprint $table) {
			$table->foreign('docente')->references('id')->on('docentes')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('cursos', function(Blueprint $table) {
			$table->foreign('asignatura_id')->references('id')->on('asignaturas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('asignaturas_carreras', function(Blueprint $table) {
			$table->foreign('carrera_id')->references('id')->on('carreras')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('asignaturas_carreras', function(Blueprint $table) {
			$table->foreign('asignatura_id')->references('id')->on('asignaturas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('planificaciones', function(Blueprint $table) {
			$table->foreign('fk_facultad')->references('id')->on('facultades')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('planificaciones', function(Blueprint $table) {
			$table->foreign('fk_escuela')->references('id')->on('escuelas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('planificaciones', function(Blueprint $table) {
			$table->foreign('fk_carrera')->references('id')->on('carreras')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('planificaciones', function(Blueprint $table) {
			$table->foreign('fk_asignatura')->references('id')->on('asignaturas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('planificaciones', function(Blueprint $table) {
			$table->foreign('fk_profesor')->references('id')->on('docentes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('unidades', function(Blueprint $table) {
			$table->foreign('semana_fk')->references('id')->on('semanas')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('unidades', function(Blueprint $table) {
			$table->foreign('fk_planificacion')->references('id')->on('planificaciones')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('contenidosunidades', function(Blueprint $table) {
			$table->foreign('fk_unidad')->references('id')->on('unidades')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('objetivos', function(Blueprint $table) {
			$table->foreign('fk_planificacion')->references('id')->on('planificaciones')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('docentes_roles', function(Blueprint $table) {
			$table->foreign('docente_id')->references('id')->on('docentes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('docentes_roles', function(Blueprint $table) {
			$table->foreign('rol_id')->references('id')->on('roles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('permisos_roles', function(Blueprint $table) {
			$table->foreign('fk_rol')->references('id')->on('roles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('permisos_roles', function(Blueprint $table) {
			$table->foreign('fk_permiso')->references('id')->on('permisos')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cursos_horarios', function(Blueprint $table) {
			$table->foreign('curso_id')->references('id')->on('cursos')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cursos_horarios', function(Blueprint $table) {
			$table->foreign('horario_id')->references('id')->on('horarios')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('docentes', function(Blueprint $table) {
			$table->dropForeign('docentes_fk_departamento_foreign');
		});
		Schema::table('departamentos', function(Blueprint $table) {
			$table->dropForeign('departamentos_fk_facultad_foreign');
		});
		Schema::table('carreras', function(Blueprint $table) {
			$table->dropForeign('carreras_fk_escuela_foreign');
		});
		Schema::table('escuelas', function(Blueprint $table) {
			$table->dropForeign('escuelas_fk_facultad_foreign');
		});
		Schema::table('cursos', function(Blueprint $table) {
			$table->dropForeign('cursos_docente_foreign');
		});
		Schema::table('cursos', function(Blueprint $table) {
			$table->dropForeign('cursos_asignatura_id_foreign');
		});
		Schema::table('asignaturas_carreras', function(Blueprint $table) {
			$table->dropForeign('asignaturas_carreras_carrera_id_foreign');
		});
		Schema::table('asignaturas_carreras', function(Blueprint $table) {
			$table->dropForeign('asignaturas_carreras_asignatura_id_foreign');
		});
		Schema::table('planificaciones', function(Blueprint $table) {
			$table->dropForeign('planificaciones_fk_facultad_foreign');
		});
		Schema::table('planificaciones', function(Blueprint $table) {
			$table->dropForeign('planificaciones_fk_escuela_foreign');
		});
		Schema::table('planificaciones', function(Blueprint $table) {
			$table->dropForeign('planificaciones_fk_carrera_foreign');
		});
		Schema::table('planificaciones', function(Blueprint $table) {
			$table->dropForeign('planificaciones_fk_asignatura_foreign');
		});
		Schema::table('planificaciones', function(Blueprint $table) {
			$table->dropForeign('planificaciones_fk_profesor_foreign');
		});
		Schema::table('unidades', function(Blueprint $table) {
			$table->dropForeign('unidades_semana_fk_foreign');
		});
		Schema::table('unidades', function(Blueprint $table) {
			$table->dropForeign('unidades_fk_planificacion_foreign');
		});
		Schema::table('contenidosunidades', function(Blueprint $table) {
			$table->dropForeign('contenidosunidades_fk_unidad_foreign');
		});
		Schema::table('objetivos', function(Blueprint $table) {
			$table->dropForeign('objetivos_fk_planificacion_foreign');
		});
		Schema::table('docentes_roles', function(Blueprint $table) {
			$table->dropForeign('docentes_roles_docente_id_foreign');
		});
		Schema::table('docentes_roles', function(Blueprint $table) {
			$table->dropForeign('docentes_roles_rol_id_foreign');
		});
		Schema::table('permisos_roles', function(Blueprint $table) {
			$table->dropForeign('permisos_roles_fk_rol_foreign');
		});
		Schema::table('permisos_roles', function(Blueprint $table) {
			$table->dropForeign('permisos_roles_fk_permiso_foreign');
		});
		Schema::table('cursos_horarios', function(Blueprint $table) {
			$table->dropForeign('cursos_horarios_curso_id_foreign');
		});
		Schema::table('cursos_horarios', function(Blueprint $table) {
			$table->dropForeign('cursos_horarios_horario_id_foreign');
		});
	}
}