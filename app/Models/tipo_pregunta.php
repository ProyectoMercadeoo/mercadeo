<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tipo_pregunta extends Model {

	//
	protected $table='tipo_preguntas';
	protected $fillable = ['tipo_pregunta'];
	protected $guarded =['id'];

}
