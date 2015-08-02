<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleRespuestaUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_respuesta_usuarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('fk_id_respuesta')->unsigned();
			$table->integer('fk_id_usuario')->unsigned();
			$table->foreign('fk_id_respuesta')->references('id')->on('respuestas')->onUpdate('cascade');
			$table->foreign('fk_id_usuario')->references('id')->on('usuarios')->onUpdate('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detalle_respuesta_usuarios');
	}

}
