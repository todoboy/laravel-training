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

// ˆÈ‰º‚ª’Ç‰Á€–Ú

// šŒy‚¢—ûK

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


//šŠÈˆÕŒf¦”Â‚Ìì¬i“ü—Í‚Æ“o˜^‚Ì‚İj

// “Šeform‚ğ•\¦‚·‚é
Route::get('posts/create', 'PostController@create');

// ÀÛ‚ÉDB‚Éƒf[ƒ^‚ğ“ü‚ê‚é
Route::post('posts', 'PostController@store');

