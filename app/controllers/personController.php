<?php

class PersonController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /person
	 *
	 * @return Response
	 */
	public function index()
	{
		$aids = Aid::all();
        $incomes = Income::all();
        $insurances = Insurance::all();
        $states = State::all();
        return View::make('person.add')->with(['aids'=>$aids, 'incomes'=>$incomes,
        				  'insurances'=>$insurances, 'states'=>$states]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /person/create
	 *
	 * @return Response
	 */
	public function create()
	{
		
		//
		$rules = [
			'name'=>'required',
			'report_id'=>'required|numeric',
			'person_code'=>'required|min:10|max:10|unique:persons,person_code',
			'tel'=>'numeric',
			'address'=>'required',
			'date'=>'required',
			'document'=>'required|image',
			'aid_amount'=>'numeric',
			'cheq_amount'=>'numeric',
			'cheq_number'=>'numeric',
		];
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();
		} else {
			Input::file('document')->move(public_path().'/document', 
			Input::get('person_code').'.'.Input::file('document')->guessClientExtension());
			$person = new Person;
			$dateArray = explode('/',Input::get('date'));
			$date = Shamsi::jmktime(0,0,0,$dateArray[1], $dateArray[2], $dateArray[0]);
			$person->report_id = Input::get('report_id');
			$person->name = Input::get('name');
			$person->person_code = Input::get('person_code');
			$person->tel = Input::get('tel');
			$person->address = Input::get('address');
			$person->state_id = Input::get('state');
			$person->aid_id = Input::get('aid');
			$person->income_id = Input::get('income');
			$person->insurance_id = Input::get('insurance');
			$person->document = 'document/'. Input::get('person_code') .'.'.Input::file('document')->guessClientExtension();
			$person->aid_amount = Input::get('aid_amount');
			$person->cheq_amount = Input::get('cheq_amount');
			$person->cheq_number = Input::get('cheq_number');
			$person->date = $date;

			$person->save();
			return Redirect::route('add_person');
		}
	}

	public function searchByName()
	{
		$persons = Person::where('name','=',Input::get('term'))->paginate(10);
		$term = Input::get('term');
		$states = State::all();
		$aids = Aid::all();
		$insurances = Insurance::all();
		$incomes = Income::all();
		return View::make('person.show')
		->with(['persons'=>$persons, 'term'=>$term, 'states'=>$states, 
		'aids'=>$aids, 'insurances'=>$insurances, 'incomes'=>$incomes]);
	
	}

	public function searchByPersonCode()
	{
		$persons = Person::where('person_code','=',Input::get('term'))->paginate(10);
		$term = Input::get('term');
		$states = State::all();
		$aids = Aid::all();
		$insurances = Insurance::all();
		$incomes = Income::all();
		return View::make('person.show')->with(['persons'=>$persons,
		'term'=>$term,'states'=>$states, 'aids'=>$aids, 'insurances'=>$insurances,
		'incomes'=>$incomes]);
	}
	public function searchByCheqNumber(){
		$persons = Person::where('cheq_number','=',Input::get('term'))->paginate(10);
		$term = Input::get('term');
		$states = State::all();
		$aids = Aid::all();
		$insurances = Insurance::all();
		$incomes = Income::all();
		return View::make('person.show')->with(['persons'=>$persons, 'term'=>$term, 'states'=>$states, 'aids'=>$aids, 'insurances'=>$insurances, 'incomes'=>$incomes]);
	}
	public function searchByCheqAmount(){
		$persons = Person::where('cheq_amount','=',Input::get('term'))->paginate(10);
		$term = Input::get('term');
		$states = State::all();
		$aids = Aid::all();
		$insurances = Insurance::all();
		$incomes = Income::all();
		return View::make('person.show')->with(['persons'=>$persons, 'term'=>$term, 'states'=>$states, 'aids'=>$aids, 'insurances'=>$insurances, 'incomes'=>$incomes]);
	}

	public function searchByDate(){
		$startArray = explode('/',Input::get('start'));
		$start = Shamsi::jmktime(0,0,0,$startArray[1], $startArray[2], $startArray[0]);
		$endArray = explode('/',Input::get('end'));
		$end = Shamsi::jmktime(0,0,0,$endArray[1], $endArray[2], $endArray[0]);
		$term = Input::get('start').' - '.Input::get('end');
		$states = State::all();
		$aids = Aid::all();
		$insurances = Insurance::all();
		$incomes = Income::all();
		$persons = Person::where('date','>=', $start)->where('date','<=',$end)->paginate(10);
		return View::make('person.show')->with(['persons'=>$persons, 'term'=>$term, 'states'=>$states, 'aids'=>$aids, 'insurances'=>$insurances, 'incomes'=>$incomes]);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /person
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /person/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */


	/**
	 * Show the form for editing the specified resource.
	 * GET /person/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$person = Person::find($id);
		$date = jDate::forge($person->date)->format('%Y/%m/%d');
		return View::make('person.edit')->with(['person'=>$person, 'date'=>$date]);
		//
	}

	public function postEdit($id){
		$rules = [
			'name'=>'required',
			'report_id'=>'required|numeric',
			'person_code'=>'required|min:10|max:10',
			'tel'=>'numeric',
			'address'=>'required',
			'date'=>'required',
			'document'=>'image',
			'aid_amount'=>'numeric',
			'cheq_amount'=>'numeric',
			'cheq_number'=>'numeric',
		];
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();
		} else {

			$person = Person::find($id);
			$dateArray = explode('/',Input::get('date'));
			$date = Shamsi::jmktime(0,0,0,$dateArray[1], $dateArray[2], $dateArray[0]);
			$person->report_id = Input::get('report_id');
			$person->name = Input::get('name');
			$person->person_code = Input::get('person_code');
			$person->tel = Input::get('tel');
			$person->address = Input::get('address');
			$person->state_id = Input::get('state');
			$person->aid_id = Input::get('aid');
			$person->income_id = Input::get('income');
			$person->insurance_id = Input::get('insurance');
			if(Input::file('document') != null) {
				Input::file('document')->move(public_path() . '/document',
				Input::get('person_code') . '.' . Input::file('document')->guessClientExtension());
				$person->document = 'document/' . Input::get('person_code') . '.' .
				Input::file('document')->guessClientExtension();
			}
			$person->aid_amount = Input::get('aid_amount');
			$person->cheq_amount = Input::get('cheq_amount');
			$person->cheq_number = Input::get('cheq_number');
			$person->date = $date;

			$person->save();
			return Redirect::route('add_person');
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /person/{id}
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
	 * DELETE /person/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	

}

?>