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



// ★ Restfull 一発OK、簡易掲示板（コピペ）

Route::get('/', function()
{
    return View::make('hello');
});

Route::resource('posts', 'PostController');



/*

Route::get('/', function()
{
	return View::make('hello');
});

// 以下が追加項目

// ★軽い練習

Route::get('another', function(){
  return 'This is another way to go.';
});


Route::get('myview', function(){
    $name = 'Dick Choi';
    return View::make('myFirstView')->with('name',$name);
});


Route::get('myview', 'MyController@show');


//★簡易掲示板の作成(コピペ)

// 投稿formを表示する
Route::get('posts/create', 'PostController@create');

// 実際にDBにデータを入れる
Route::post('posts', 'PostController@store');

// すべてのPostを表示する
Route::get('posts', 'PostController@index');

// 一つのPostを表示する。
Route::get('posts/{postid}','PostController@show');

*/



// //★簡易掲示板の作成(自主制作)

// 投稿・削除・編集formと投稿の表示
Route::get('boards', 'BoardController@index');

// 投稿
Route::post('boards', 'BoardController@store');

// 削除
Route::post('boards/delete', 'BoardController@destroy');

// 編集
Route::post('boards/edit', 'BoardController@edit');

// 更新
Route::post('boards/update', 'BoardController@update');
