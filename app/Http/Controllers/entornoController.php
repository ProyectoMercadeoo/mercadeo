<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\entorno as entorno;

class entornoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$entornos = entorno::all();
		return \View::make('entorno/entorno_list',compact('entornos')); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return \View::make('entorno/entorno_new');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(request $request)
	{
		//
		$entorno = new entorno; 
		$entorno->create($request->all());
		return redirect ('entorno');
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
		$entorno = entorno::find($id);
		return \View::make('entorno/entorno_update',compact ('entorno'));
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
		$entorno = entorno::find($request->id); 
		$entorno->tipo_entorno= $request->tipo_entorno; 
		$entorno->save(); 
		return redirect('entorno'); 
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
		$entorno = entorno::find($id);
		$entorno->delete();
		return redirect()->back();    

	}
	public function search (Request $request)
	{
		$entornos = entorno::where('tipo_entorno','like','%'. $request->tipo_entorno.'%')->get();
		return \View::make('entorno/entorno_list', compact('entornos'));
	}

}