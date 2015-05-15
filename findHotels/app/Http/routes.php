<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('home1',function()
{

	return view('home1');
}


	);

Route::get('addhotel',function()
{

	return view('addhotel');
}


	);
/*Route::get('authers',function()
{

	return view('authers.index');
}


	);*/
Route::get('authers',array('uses'=>'authers@index'));