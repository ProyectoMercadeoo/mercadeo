<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class entorno extends Model {

	//
	protected $table='entornos';
	protected $fillable = ['tipo_entorno'];
	protected $guarded =['id'];

}
