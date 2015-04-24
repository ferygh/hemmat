<?php

class AidController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /aid
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$term = Aid::all();
		return View::make('aid.add')->with(['term'=>$term]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /aid/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$rules = ['title'=>'required'];
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();
		} else {
			$aid = new Aid;
			$aid->title = Input::get('title');
			$aid->save();
			return Redirect::route('aids');
		}
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /aid
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}
	public function view($id){
		$persons = Person::where('aid_id','=',$id)->paginate(10);
		$term = Aid::find($id)->title;
		$states = State::all();
		$incomes = Income::all();
		$insurances = Insurance::all();
		$aids = Aid::all();

		$info_states = null;
		foreach($states as $item){
			$info_states[] = [
				'title'=>$item->title,
				'count'=> Person::where('state_id','=', $item->id)->where('aid_id','=',$id)->count()
			];
		}

		$info_insurances = null;
		foreach($insurances as $item) {
			$info_insurances[] = [
				'title' => $item->title,
				'count' => Person::where('insurance_id','=', $item->id)->where('aid_id','=',$id)->count()
			];
		}

		$info_incomes = null;
		foreach($incomes as $item) {
			$info_incomes[] = [
				'title' => $item->title,
				'count' => Person::where('income_id', '=', $item->id)->where('aid_id', '=', $id)->count()
			];
		}

		$info_aids = null;
		foreach($aids as $item) {
			$info_aids[] = [
				'title' => $item->title,
				'count' => Person::where('aid_id', '=', $item->id)->where('aid_id', '=', $id)->count()
			];
		}
		return View::make('aid.show')->with(['persons'=>$persons, 'term'=>$term, 'states'=>$states, 'incomes'=>$incomes, 'insurances'=>$insurances, 'aids'=>$aids, 'info_states'=>$info_states, 'info_incomes'=>$info_incomes, 'info_insurances'=>$info_insurances, 'info_aids'=>$info_aids]);
	}

	/**
	 * Display the specified resource.
	 * GET /aid/{id}
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
	 * GET /aid/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /aid/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /aid/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}