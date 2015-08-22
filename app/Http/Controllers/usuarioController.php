<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\usuario as usuario;

class usuarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$usuarios = usuario::all();
		return \View::make('list',compact('usuarios')); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return \View::make('new');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(request $request)
	{
		//
		$usuario = new datos_basicos_empresa; 
		$usuario->create($request->all());
		return redirect ('usuario');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$usuario = usuario::find($id);
		return \View::make('update',compact ('usuario'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(request $request)
	{
		//
		$usuario = usuario::find($request->id); 
		$usuario->tipo_documento = $request->tipo_documento; 
		$usuario->primer_nombre = $request->primer_nombre; 
		$usuario->segundo_nombre = $request->segundo_nombre; 
		$usuario->primer_apellido = $request->primer_apellido; 
		$usuario->segundo_apellido = $request->segundo_apellido; 
		$usuario->fecha_de_nacimiento = $request->fecha_de_nacimiento; 
		$usuario->genero = $request->genero;
		$usuario->email = $request->email; 
		$usuario->ciudad = $request->ciudad; 
		$usuario->direccion = $request->direccion; 
		$usuario->telefono = $request->telefono; 
		$usuario->celular = $request->celular; 
		$usuario->contraseña = $request->contraseña; 
		$usuario->cargo = $request->cargo; 
		$usuario->estado_usuario = $request->estado_usuario; 
		$usuario->save(); 
		return redirect('usuario'); 
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$usuarios = usuario::find($id);
		$usuarios->delete();
		return redirect()->back();    

	}
	public function search (Request $request)
	{
		$usuarios = usuario::where('identificacion','like','%'. $request->identificacion.'%')->get();
		return \View::make('list', compact('usuarios'));
	}

}