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


Route::get('/uppercase/{string}', function ($string) {
	if (is_string($string) && !is_numeric($string)) {
		return strtoupper($string);
	} else {
		return "Input should be a string you doorknob.";
	}
});


Route::get('/increment/{number}', function ($number) {
	if (is_numeric($number)) {
		return $number + 1;
	} else {
		return "Input should be a number you doorknob.";
	}
});


Route::get('/add/{a}/{b}', function($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a + $b;
	} else if (!is_numeric($a) && is_numeric($b)) {
		return "The first input should be a number you doorknob.";
	} else if (is_numeric($a) && !is_numeric($b)) {
		return "The second input should be a number you doorknob.";
	} else {
		return "Both inputs should be a number you doorknob.";
	}
});
