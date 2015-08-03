<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class concepto extends Model {

	//
	protected $table='conceptos';
	protected $fillable = ['tipo','descripcion'];
	protected $guarded =['id'];
}
