<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class datos_basicos_empresa extends Model {

	//
	protected $table='datos_basicos_empresas';
	protected $fillable = ['nombre','direccion_empresa' ,'telefono' ,'email' ,'pagina_web','años_de_funcionamiento','nit','sector_economico','origen_capital','tamaño_empresa','vision','mision','valores_corporativos','core_bussines','objetivos_corporativa','imagen_corporativa','conformacion_capital','numeros_propietarios','funcion_social','fabricacion_producto','estado_empresa' ];
	protected $guarded =['id'];

}
