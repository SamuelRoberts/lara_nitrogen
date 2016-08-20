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

Route::get('/', function () {

	return view('app');

});

Route::post('create-anonymous-account','HomeController@index');
Route::post('add_username','UserController@addUsername');
Route::post('change-pass','UserController@changePass');

Route::get('/n/{user}', 'UrlAuthenticationController@AccessAccountByUrl');

Route::auth();
Route::get('chatview', 'ChatController@index');
Route::get('systemMessage', 'ChatController@systemMessage');