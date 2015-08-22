<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class datos_basicos_empresaController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$datos_basicos_empresas = datos_basicos_empresa::all();
		return \View::make('list',compact('datos_basicos_empresas')); 
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
		$datos_basicos_empresa = new datos_basicos_empresa; 
		$datos_basicos_empresa->create($request->all());
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
		$usuario->nombre= $request->nombre; 
		$usuario->direccion = $request->direccion; 
		$usuario->telefono = $request->telefono; 
		$usuario->email = $request->email; 
		$usuario->pagina_web = $request->paginaweb; 
		$usuario->años_de_funcionamiento = $request->años_de_funcionamiento; 
		$usuario->nit = $request->nit;
		$usuario->sector_economico = $request->sector_economico; 
		$usuario->origen_capital = $request->origen_capital; 
		$usuario->tamaño_empresa = $request->tamaño_empresa; 
		$usuario->vision = $request->vision; 
		$usuario->mision = $request->mision; 
		$usuario->valores_corporativos = $request->valores_corporativos; 
		$usuario->core_bussines = $request->core_bussines; 
		$usuario->objetivos_corporativa = $request->objetivos_corporativa; 
		$usuario->imagen_corporativa = $request->imagen_corporativa; 
		$usuario->conformacion_capital = $request->conformacion_capital; 
		$usuario->numeros_propietarios = $request->numeros_propietarios; 
		$usuario->funcion_social = $request->funcion_social; 
		$usuario->fabricacion_producto = $request->fabricacion_producto; 
		$usuario->estado_empresa = $request->estado_empresa; 
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