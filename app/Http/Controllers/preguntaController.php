<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\pregunta as pregunta;

class preguntaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$preguntas = pregunta::all();
		return \View::make('pregunta/pregunta_list',compact('preguntas')); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return \View::make('pregunta/pregunta_new');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(request $request)
	{
		//
		$pregunta = new pregunta; 
		$pregunta->create($request->all());
		return redirect ('pregunta');
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
		$pregunta = pregunta::find($id);
		return \View::make('pregunta/pregunta_update',compact ('pregunta'));
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
		$pregunta = pregunta::find($request->id); 
		$pregunta->pregunta = $request->pregunta;  
		$pregunta->save(); 
		return redirect('pregunta'); 
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
		$pregunta = pregunta::find($id);
		$pregunta->delete();
		return redirect()->back();    

	}
	public function search (Request $request)
	{
		$preguntas = pregunta::where('pregunta','like','%'. $request->pregunta.'%')->get();
		return \View::make('pregunta/pregunta_list', compact('preguntas'));
	}

}