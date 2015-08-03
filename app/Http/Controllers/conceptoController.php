<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\concepto as concepto;

class conceptoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$conceptos = concepto::all();
		return \View::make('list',compact('conceptos')); 
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
		$concepto = new concepto; 
		$concepto->create($request->all());
		return redirect ('concepto');
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
		$concepto = concepto::find($id);
		return \View::make('update',compact ('concepto'));
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
		$concepto = concepto::find($request->id); 
		$concepto->tipo = $request->tipo; 
		$concepto->descripcion = $request->descripcion; 
		$concepto->save(); 
		return redirect('concepto'); 
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
		$concepto = concepto::find($id);
		$concepto->delete();
		return redirect()->back();    

	}
	public function search (Request $request)
	{
		$conceptos = concepto::where('tipo','like','%'. $request->tipo.'%')->get();
		return \View::make('list', compact('conceptos'));
	}

}
