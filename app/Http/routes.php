<?php

Route::get('/', 'PostsController@index');

Route::resource('posts', 'PostsController'); // a resource controller
Route::resource('students', 'StudentsController');


Route::get('/test', function() {
	$user = new App\User();
	$user->name = 'Cayden Simler';
	$user->email = 'cayden.simler@hotmail.com';
	$user->password = Hash::make('password');
	$user->save();
});

Route::get('/users', 'PostsController@users');

Route::get('/account', 'PostsController@account');

// Authentication routes...
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');










