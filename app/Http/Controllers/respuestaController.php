<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\respuesta as respuesta;

class respuestaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$respuestas = respuesta::all();
		return \View::make('respuesta/respuesta_list',compact('respuestas')); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return \View::make('respuesta/respuesta_new');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(request $request)
	{
		//
		$respuesta = new respuesta; 
		$respuesta->create($request->all());
		return redirect ('respuesta');
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
		$respuesta = respuesta::find($id);
		return \View::make('respuesta/respuesta_update',compact ('respuesta'));
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
		$respuesta = respuesta::find($request->id); 
		$respuesta->respuesta  = $request->respuesta ;  
		$respuesta->save(); 
		return redirect('respuesta'); 
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
		$respuesta = respuesta::find($id);
		$respuesta->delete();
		return redirect()->back();    

	}
	public function search (Request $request)
	{
		$respuestas = respuesta::where('respuesta','like','%'. $request->respuesta.'%')->get();
		return \View::make('respuesta/respuesta_list', compact('respuestas'));
	}

}