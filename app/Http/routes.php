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
////RUTAS PARA EL RECURSO Usuario
route::resource('usuario','usuarioController');
//una nueva ruta para eliminar registros con el metodo get
route::get('usuario/destroy/{id}',['as' => 'usuario/destroy','uses'=>'usuarioController@destroy']);
//ruta para realizar la busqueda de registros
Route::post ('usuario/search',['as'=>'usuario/search','uses'=>'usuarioController@search']);

////RUTAS PARA EL RECURSO Datos basicos de empresa
route::resource('datos_basicos_empresa','datos_basicos_empresaController');
//una nueva ruta para eliminar registros con el metodo get
route::get('datos_basicos_empresa/destroy/{id}',['as' => 'datos_basicos_empresa/destroy','uses'=>'datos_basicos_empresaController@destroy']);
//ruta para realizar la busqueda de registros
Route::post ('datos_basicos_empresa/search',['as'=>'datos_basicos_empresa/search','uses'=>'datos_basicos_empresaController@search']);

////RUTAS PARA EL RECURSO Encuesta
route::resource('encuesta','encuestaController');
//una nueva ruta para eliminar registros con el metodo get
route::get('encuesta/destroy/{id}',['as' => 'encuesta/destroy','uses'=>'encuestaController@destroy']);
//ruta para realizar la busqueda de registros
Route::post ('encuesta/search',['as'=>'encuesta/search','uses'=>'encuestaController@search']);

////RUTAS PARA EL RECURSO Entorno
route::resource('entorno','entornoController');
//una nueva ruta para eliminar registros con el metodo get
route::get('entorno/destroy/{id}',['as' => 'entorno/destroy','uses'=>'entornoController@destroy']);
//ruta para realizar la busqueda de registros
Route::post ('entorno/search',['as'=>'entorno/search','uses'=>'entornoController@search']);

////RUTAS PARA EL RECURSO tipo de pregunta
route::resource('tipo_pregunta','tipo_preguntaController');
//una nueva ruta para eliminar registros con el metodo get
route::get('tipo_pregunta/destroy/{id}',['as' => 'tipo_pregunta/destroy','uses'=>'tipo_preguntaController@destroy']);
//ruta para realizar la busqueda de registros
Route::post ('tipo_pregunta/search',['as'=>'tipo_pregunta/search','uses'=>'tipo_preguntaController@search']);

////RUTAS PARA EL RECURSO Concepto
route::resource('concepto','conceptoController');
//una nueva ruta para eliminar registros con el metodo get
route::get('concepto/destroy/{id}',['as' => 'concepto/destroy','uses'=>'conceptoController@destroy']);
//ruta para realizar la busqueda de registros
Route::post ('concepto/search',['as'=>'concepto/search','uses'=>'conceptoController@search']);

////RUTAS PARA EL RECURSO Pregunta
route::resource('pregunta','preguntaController');
//una nueva ruta para eliminar registros con el metodo get
route::get('pregunta/destroy/{id}',['as' => 'pregunta/destroy','uses'=>'preguntaController@destroy']);
//ruta para realizar la busqueda de registros
Route::post ('pregunta/search',['as'=>'pregunta/search','uses'=>'preguntaController@search']);

////RUTAS PARA EL RECURSO Respuesta
route::resource('respuesta','respuestaController');
//una nueva ruta para eliminar registros con el metodo get
route::get('respuesta/destroy/{id}',['as' => 'respuesta/destroy','uses'=>'respuestaController@destroy']);
//ruta para realizar la busqueda de registros
Route::post ('respuesta/search',['as'=>'respuesta/search','uses'=>'respuestaController@search']);

////RUTAS PARA EL RECURSO Dofa
route::resource('dofa','dofaController');
//una nueva ruta para eliminar registros con el metodo get
route::get('dofa/destroy/{id}',['as' => 'dofa/destroy','uses'=>'dofaController@destroy']);
//ruta para realizar la busqueda de registros
Route::post ('dofa/search',['as'=>'dofa/search','uses'=>'dofaController@search']);
//aqui solo copien uno de esos parrafos y cambien el nombre de la tabla por la que sigue en orden 
//como se ve en la migracion
