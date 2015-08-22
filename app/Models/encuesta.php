<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class encuesta extends Model {

	//
	protected $table='encuestas';
	protected $fillable = ['fecha_encuesta','instrucciones'];
	protected $guarded =['id'];

}
