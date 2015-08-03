<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
////RUTAS PARA EL RECURSO Concepto
route::resource('concepto','conceptoController');
//una nueva ruta para eliminar registros con el metodo get
route::get('concepto/destroy/{id}',['as' => 'concepto/destroy','uses'=>'conceptoController@destroy']);
//ruta para realizar la busqueda de registros
Route::post ('concepto/search',['as'=>'concepto/search','uses'=>'conceptoController@search']);
//aqui solo copien uno de esos parrafos y cambien el nombre de la tabla por la que sigue en orden 
//como se ve en la migracion
