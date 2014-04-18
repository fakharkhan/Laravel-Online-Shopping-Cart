<?php

class TerritoriesController extends \BaseController {

	/**
	 * Display a listing of territories
	 *
	 * @return Response
	 */
	public function index()
	{
		$territories = Territory::all();

		return View::make('territories.index', compact('territories'));
	}

	/**
	 * Show the form for creating a new territory
	 *
	 * @return Response
	 */
	public function create()
	{

        $regions = Region::all()->lists('description','id');//+array('0'=>'None')

		return View::make('territories.create', compact('regions'));
	}

	/**
	 * Store a newly created territory in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Territory::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Territory::create($data);

		return Redirect::route('territories.index');
	}

	/**
	 * Display the specified territory.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$territory = Territory::findOrFail($id);

		return View::make('territories.show', compact('territory'));
	}

	/**
	 * Show the form for editing the specified territory.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$territory = Territory::find($id);

		return View::make('territories.edit', compact('territory'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$territory = Territory::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Territory::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$territory->update($data);

		return Redirect::route('territories.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Territory::destroy($id);

		return Redirect::route('territories.index');
	}

}