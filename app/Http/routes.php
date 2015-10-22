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
	return view('welcome');
});

Route::get('/about', function() {
	return view('about');
});

Route::get('foo', function() {
	return 'bar';
});

Route::group(['prefix'=>'admin'], function() {
	Route::get('/hello/{name}', function($name) {
		return "Hello $name!";

	});

	Route::get('/welcome/{name?}', function($name= 'guest') {
		return "Welcome $name to Villa Mataano";
	});
	Route::get('/hello/{name}', function($name) {
		return "Hello $name!";

	});

	Route::get('/marhaban/{name?}', [
		'as' =>'welcome.guest',
		function($name='guest'){
			return "Welcome $name to Villa Mataano!";

		}

	]);
});

Route::post('login-submit', function() {
	$result = "Username:". Request::get('username');
	$result .= "| Password:". Request::get('password');
	return $result;
});

route::get('posts', function() {
	return view('posts.index');
});

route::get('posts', 'PostsController@index');


Route::get('posts/{id}', 'PostsController@show');


	