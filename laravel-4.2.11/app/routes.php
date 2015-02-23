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

Route::get('/', function()
{
	return View::make('hello');
});

// 以下が追加項目

Route::get('another', function(){
  return 'This is another way to go.';
});

/*
Route::get('myview', function(){
    $name = 'Dick Choi';
    return View::make('myFirstView')->with('name',$name);
});
*/

Route::get('myview', 'MyController@show');
