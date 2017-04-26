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


// Route::get('/uppercase/{string}', function ($string) {
// 	if ($string == 'cayden') {
// 		header("Location: /cayden");
// 	} else if (is_string($string) && !is_numeric($string) && $string != "cayden") {
// 		return '<h1>' . strtoupper($string) . '</h1>';
// 	} else {
// 		return "<h1>Input should be a string you doorknob.</h1>";
// 	}
// });

// Route::get('/cayden', function() {
// 	return "<h1>Hello, Cayden!</h1>";
// });


// Route::get('/increment/{number}', function ($number) {
// 	if (is_numeric($number)) {
// 		return '<h1>' . $number + 1 . '</h1>';
// 	} else {
// 		return "<h1>Input should be a number you doorknob.</h1>";
// 	}
// });


// Route::get('/add/{a}/{b}', function($a, $b) {
// 	if (is_numeric($a) && is_numeric($b)) {
// 		return '<h1>' . ($a + $b) . '</h1>';
// 	} else if (!is_numeric($a) && is_numeric($b)) {
// 		return "<h1>The first input should be a number you doorknob.</h1>";
// 	} else if (is_numeric($a) && !is_numeric($b)) {
// 		return "<h1>The second input should be a number you doorknob.</h1>";
// 	} else {
// 		return "<h1>Both inputs should be a number you doorknob.</h1>";
// 	}
// });


// Route::get('/rolldice/{guess?}', function($guess = null) {
// 	$randomNumber = mt_rand(1, 6);
// 	$data = ['randomNumber' => $randomNumber, 'guess' => $guess];
// 	return view('roll-dice', $data);
// });


// Route::get('/sayhello/{name}', function($name)
// {
//     if ($name == "Chris") {
//         return Redirect::to('/');
//     }

//     $data = array('name' => $name);
//     return view('my-first-view', $data);
// });


















// Route::get('/uppercase/{word}', 'ExampleController@uppercased');
// Route::get('/rolldice/{guess}', 'ExampleController@rollDice');
// Route::get('/increment/{number?}', 'ExampleController@increment');
// Route::get('/add/{a}/{b}', 'ExampleController@addition');










// CRUD Operations for Posts
// Route::get('/posts', 'PostsController@index'); // show all the posts
// Route::get('/posts/create', 'PostsController@create'); // show the form to create a post
// Route::post('/posts', 'PostsController@store'); // save the new post
// Route::get('/posts/{post}', 'PostsController@show'); // show a specific post (by id)
// Route::get('/posts/{post}/edit', 'PostsController@edit'); // show the form to edit a post
// Route::put('/posts/{post}', 'PostsController@update'); // update the post in the database
// Route::delete('/posts/{post}', 'PostsController@destroy'); // delete a post (by id)

Route::resource('posts', 'PostsController'); // a resource controller
Route::resource('students', 'StudentsController');

Route::get('orm-test', function ()
{

 //    $post1 = new \App\Models\Post();
	// $post1->title = 'Eloquent is awesome!';
	// $post1->url='https://laravel.com/docs/5.1/eloquent';
	// $post1->content  = 'It is super easy to create a new post.';
	// $post1->created_by = 1;
	// $post1->save();

	// $post2 = new \App\Models\Post();
	// $post2->title = 'Eloquent is really easy!';
	// $post2->url='https://laravel.com/docs/5.1/eloquent';
	// $post2->content = 'It is super easy to create a new post.';
	// $post2->created_by = 1;
	// $post2->save();


	// return App\Models\Post::all() . PHP_EOL;

	// $post = \App\Models\Post::find(1); // need to call find first
	// $post->content = "some other content"; // reassign the content
	// $post->save(); // save to the database

	// $allPosts = App\Models\Post::all();
	return var_dump(App\Models\Post::find(100)->exists());

});










