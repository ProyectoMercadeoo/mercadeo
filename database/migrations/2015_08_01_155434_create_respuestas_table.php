<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('respuestas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('respuesta');
			$table->integer('fk_id_pregunta')->unsigned();
			$table->integer('fk_id_concepto')->unsigned();
			$table->foreign('fk_id_pregunta')->references('id')->on('preguntas')->onUpdate('cascade');
			$table->foreign('fk_id_concepto')->references('id')->on('conceptos')->onUpdate('cascade');
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
		Schema::drop('respuestas');
	}

}
