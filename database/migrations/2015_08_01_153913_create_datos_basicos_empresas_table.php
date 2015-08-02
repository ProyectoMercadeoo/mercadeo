<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosBasicosEmpresasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('datos_basicos_empresas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombres');
			$table->string('direccion_empresa');
			$table->integer('telefono');	
			$table->string('email');
			$table->string('pagina_web');
			$table->integer('años_de_funcionamiento');
			$table->integer('nit');
			$table->string('sector_economico');
			$table->string('origen_capital');
			$table->string('tamaño_empresa');
			$table->string('vision');
			$table->string('mision');
			$table->string('valores_corporativos');
			$table->string('core_bussines');
			$table->string('objetivos_corporativa');
			$table->string('imagen_corporativa');
			$table->string('conformacion_capital');
			$table->integer('numero_propietarios');
			$table->string('funcion_social');
			$table->string('fabricacion_producto');
			$table->char('estado_empresa');
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
		Schema::drop('datos_basicos_empresas');
	}

}
