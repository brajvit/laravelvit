<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@getIndex');

Route::get('direct', function () {
    return view('direct');
});



Route::get('post', function () {

	$post= App\Post::find(1);
    echo 'title ' .$post->title;

    	echo "<br/>";
    	echo "<br/>";
    	echo "<br/>";
    echo 'body ' .$post->body;

    });



Route::get('posts', function () {
    
    	$orders= App\Post::all();
    	foreach($posts as $post);
        echo $post->title . "<br/>";


});



Route::get('contact', 'PagesController@getContact');

Route::get('about', 'PagesController@getAbout');


Route::get('display', function () {
    return view('pages.display');
});




Route::resource('posts', 'PostController');





/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
