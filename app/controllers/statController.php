<?php

class StatController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /stat
	 *
	 * @return Response
	 */
	public function state()
	{
		
		$state_info = DB::table('persons')
                 ->select('state_id', DB::raw('count(*) as total'))
                 ->groupBy('state_id')
                 ->get();     
       	$text="نمودار تفکیک استانی";
		return View::make('stat.state')->with('state_info',$state_info)
										->with('text',$text);
	}


	/**
	 * Show the form for creating a new resource.
	 * GET /stat/create
	 *
	 * @return Response
	 */
	

	/**
	 * Store a newly created resource in storage.
	 * POST /stat
	 *
	 * @return Response
	 */
	public function insurance()
	{
		$insurance_info = DB::table('persons')
                 ->select('insurance_id', DB::raw('count(*) as total'))
                 ->groupBy('insurance_id')
                 ->get();
                 $text="نمودار تفکیک بیمه";
		return View::make('stat.insurance')->with('insurance_info',$insurance_info)
										->with('text',$text);
	}


	public function income()
	{
		$income_info = DB::table('persons')
                 ->select('income_id', DB::raw('count(*) as total'))
                 ->groupBy('income_id')
                 ->get();
                 $text="نمودار تفکیک درآمد";
		return View::make('stat.income')->with('income_info',$income_info)
										->with('text',$text);
	}


	public function aid()
	{
		$aid_info = DB::table('persons')
                 ->select('aid_id', DB::raw('count(*) as total'))
                 ->groupBy('aid_id')
                 ->get();
                 $text="نمودار تفکیک بیمه";
		return View::make('stat.aid')->with('aid_info',$aid_info)
										->with('text',$text);
	}


	/**
	 * Display the specified resource.
	 * GET /stat/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /stat/{id}/edit
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
	 * PUT /stat/{id}
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
	 * DELETE /stat/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/*public function state($month){
		$time = jDate::forge('now - '.$month.' month')->format("Y/m/d");
		$dateArray = explode('/',$time);
		//$timestamp = Shamsi::jmktime(0,0,0,$dateArray[1], $dateArray[2], $dateArray[0]);
		$timestamp = ($month*30*24*60);
		$result = DB::select('select state_id,(count(state_id)*100/(select count(*) from persons WHERE date >= date - ?))as prcnt from persons group by state_id',[$timestamp]);
		$items[] = null;
		return View::make('stat.show')->with(['items'=>$result]);
		//return $timestamp;
	}
*/


	//$query1="SELECT state_id, count(state_id) 
		//from persons
		//group by state_id";

}
?>