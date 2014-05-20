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


Route::get('/', function() {
	//return View::make('hello');
	return "HOME!";
});


Route::get('usse', function() {
	return View::make('usse');	
});

//Route::get('users', 'UserController@getIndex');

Route::get('users', function() {
	//return View::make('users');
	$users = User::all();
	
	return View::make('users')->with('users',$users);
});

Route::get('usse/{num1}/{num2?}' , function($num1,$num2 = null) {
	return 'Usse ' . $num1 . ' - ' . $num2;
});

Route::get('player', 'PlayerController@showProfile');


Route::group(array('prefix' => 'api'), function() {
	Route::resource('comments', 'CommentController', 
		array('only' => array('index', 'store', 'destroy')));
});

Route::get('comments', function() {
	return View::make('comments');	
});



App::missing(function($exception) {
	return "Woo.. i need a custom 404";
});