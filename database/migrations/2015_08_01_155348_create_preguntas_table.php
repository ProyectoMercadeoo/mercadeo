<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('preguntas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('pregunta');
			$table->integer('fk_id_entorno')->unsigned();
			$table->integer('fk_id_encuesta')->unsigned();
			$table->integer('fk_id_tipo_pregunta')->unsigned();
			$table->foreign('fk_id_entorno')->references('id')->on('entornos')->onUpdate('cascade');
			$table->foreign('fk_id_encuesta')->references('id')->on('encuestas')->onUpdate('cascade');
			$table->foreign('fk_id_tipo_pregunta')->references('id')->on('tipo_preguntas')->onUpdate('cascade');
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
		Schema::drop('preguntas');
	}

}
