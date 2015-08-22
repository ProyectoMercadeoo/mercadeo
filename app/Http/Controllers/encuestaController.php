<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\encuesta as encuesta;

class encuestaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$encuestas = encuesta::all();
		return \View::make('encuesta/encuesta_list',compact('encuestas')); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return \View::make('encuesta/encuesta_new');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(request $request)
	{
		//
		$encuesta = new encuesta; 
		$encuesta->create($request->all());
		return redirect ('encuesta');
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
		$encuesta = encuesta::find($id);
		return \View::make('encuesta/encuesta_update',compact ('encuesta'));
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
		$encuesta = encuesta::find($request->id); 
		$encuesta->fecha_encuesta = $request->fecha_encuesta; 
		$encuesta->instrucciones = $request->instrucciones; 
		$encuesta->save(); 
		return redirect('encuesta'); 
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
		$encuesta = encuesta::find($id);
		$encuesta->delete();
		return redirect()->back();    

	}
	public function search (Request $request)
	{
		$encuestas = encuesta::where('fecha_encuesta','like','%'. $request->fecha_encuesta.'%')->get();
		return \View::make('encuesta/encuesta_list', compact('encuestas'));
	}

}