<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model {

	//
	protected $table='usuarios';
	protected $fillable = ['tipo_documento','primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','fecha_de_nacimiento','genero','email','ciudad','direccion ','telefono','celular','contraseña','cargo','estado_usuario'];
	protected $guarded =['id'];


}
