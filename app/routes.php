<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::group(['before'=>'auth'], function() {
    Route::get('/', ['as'=>'main', 'uses'=>'HomeController@index']);
    Route::get('person/add', ['as'=>'add_person', 'uses'=>'personController@index']);
    Route::get('person/{id}/edit', ['as'=>'edit_person', 'uses'=>'personController@edit']);
    Route::get('states', ['as'=>'states', 'uses'=>'stateController@index']);
    Route::get('aids', ['as'=>'aids', 'uses'=>'aidController@index']);
    Route::get('incomes', ['as'=>'incomes', 'uses'=>'incomeController@index']);
    Route::get('insurances', ['as'=>'insurances', 'uses'=>'insuranceController@index']);
    Route::get('user/change_password',['as'=>'change_password', 'uses'=>'userController@getChangePassword']);
    



    Route::get('state/{id}', ['as'=>'showByState', 'uses'=>'stateController@view']);
    Route::get('income/{id}', ['as'=>'showByIncome', 'uses'=>'incomeController@view']);
    Route::get('insurance/{id}', ['as'=>'showByInsurance', 'uses'=>'insuranceController@view']);
    Route::get('aid/{id}', ['as'=>'showByAid', 'uses'=>'aidController@view']);
    Route::get('stat/state', ['as'=>'stat_state', 'uses'=>'statController@state']);
    Route::get('stat/income', ['as'=>'stat_income', 'uses'=>'statController@income']);
    Route::get('stat/insurance', ['as'=>'stat_insurance', 'uses'=>'statController@insurance']);
    Route::get('stat/aid', ['as'=>'stat_aid', 'uses'=>'statController@aid']);



    Route::post('search/name', ['as'=>'searchByName', 'uses'=>'personController@searchByName']);
    Route::post('search/personCode', ['as'=>'searchByPersonCode', 'uses'=>'personController@searchByPersonCode']);
    Route::post('search/cheqNumber', ['as'=>'searchByCheqNumber', 'uses'=>'personController@searchByCheqNumber']);
    Route::post('search/cheqAmount', ['as'=>'searchByCheqAmount', 'uses'=>'personController@searchByCheqAmount']);
    Route::post('search/date', ['as'=>'searchByDate', 'uses'=>'personController@searchByDate']);


    Route::post('person/add', 'personController@create');
    Route::post('person/{id}/edit', 'personController@postEdit');
    Route::post('states', 'stateController@create');
    Route::post('aids', 'aidController@create');
    Route::post('incomes', 'incomeController@create');
    Route::post('insurances', 'insuranceController@create');
    Route::post('user/change_password', 'userController@postChangePassword');

   /* Route::group(['prefix'=>'stat'], function(){
        Route::get('state/{month}',['as'=>'stat_state','uses'=>'statController@state']);
    });*/
});

Route::get('login', ['as'=>'login', 'uses'=>'userController@getLogin']);
Route::post('login', 'userController@postLogin');

Route::get('logout', ['as'=>'logout', 'uses'=>'userController@logout']);

?>