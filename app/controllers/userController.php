<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /user
	 *
	 * @return Response
	 */
    public function getLogin() {
        return View::make('login');
    }
    public function postLogin() {
        if(Auth::attempt(['username'=>Input::get('username'), 'password'=>Input::get('password')])) {
            return Redirect::route('main');
        } else {
            return Redirect::route('login');
        }
    }
	public function logout() {
		Auth::logout();
		return Redirect::route('login');
	}

	public function getChangePassword()
	{
		return View::make('changePass');
	}

	public function postChangePassword()
	{
		$user = User::find(Auth::user()->id);
		if(Hash::check(Input::get('old'), $user->password)) {
			if(Input::get('password')==Input::get('confirm')){
				$user->password = Hash::make(Input::get('password'));
				$user->save();
				Auth::logout();
				return Redirect::route('login');
			} else {
				return Redirect::back()->withInput();
			}
		} else {
			return Redirect::back()->withInput();
		}
	}
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /user/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /user
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /user/{id}
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
	 * GET /user/{id}/edit
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
	 * PUT /user/{id}
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
	 * DELETE /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}