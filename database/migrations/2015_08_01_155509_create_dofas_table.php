<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDofasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dofas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->integer('fk_id_datos_basicos_empresa')->unsigned();
			$table->foreign('fk_id_datos_basicos_empresa')->references('id')->on('datos_basicos_empresas')->onUpdate('cascade');
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
		Schema::drop('dofas');
	}

}
