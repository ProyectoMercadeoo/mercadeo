<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleMatrizConceptosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_matriz_conceptos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('fk_id_dofa')->unsigned();
			$table->integer('fk_id_concepto')->unsigned();
			$table->foreign('fk_id_dofa')->references('id')->on('dofas')->onUpdate('cascade');
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
		Schema::drop('detalle_matriz_conceptos');
	}

}
