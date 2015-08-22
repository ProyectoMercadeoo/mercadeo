<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dofa extends Model {

	//
	protected $table='dofas';
	protected $fillable = ['fecha ', 'fk_datos_basicos_empresa'];
	protected $guarded =['id'];

}
