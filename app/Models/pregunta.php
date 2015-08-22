<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pregunta extends Model {

	//
	protected $table='preguntas';
	protected $fillable = ['pregunta','fk_entorno','fk_encuesta','fk_tipo_pregunta'];
	protected $guarded =['id'];
	
}
