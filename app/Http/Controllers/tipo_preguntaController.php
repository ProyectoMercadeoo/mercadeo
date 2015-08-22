<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\tipo_pregunta as tipo_pregunta;

class tipo_preguntaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$tipo_preguntas = tipo_pregunta::all();
		return \View::make('tipo_pregunta/tipo_pregunta_list',compact('tipo_preguntas')); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return \View::make('tipo_pregunta/tipo_pregunta_new');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(request $request)
	{
		//
		$tipo_pregunta = new tipo_pregunta; 
		$tipo_pregunta->create($request->all());
		return redirect ('tipo_pregunta');
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
		$tipo_pregunta = tipo_pregunta::find($id);
		return \View::make('tipo_pregunta/tipo_pregunta_update',compact ('tipo_pregunta'));
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
		$tipo_pregunta = tipo_pregunta::find($request->id); 
		$tipo_pregunta->tipo_pregunta = $request->tipo_pregunta; 
		$tipo_pregunta->save(); 
		return redirect('tipo_pregunta'); 
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
		$tipo_pregunta = tipo_pregunta::find($id);
		$tipo_pregunta->delete();
		return redirect()->back();    

	}
	public function search (Request $request)
	{
		$tipo_preguntas = tipo_pregunta::where('tipo_pregunta','like','%'. $request->tipo_pregunta.'%')->get();
		return \View::make('tipo_pregunta/tipo_pregunta_list', compact('tipo_preguntas'));
	}

}