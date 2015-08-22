<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class respuesta extends Model {

	//
	protected $table='respuestas';
	protected $fillable = ['respuesta','fk_pregunta','fk_concepto'];
	protected $guarded =['id'];

}
