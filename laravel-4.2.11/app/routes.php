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



// �� Restfull �ꔭOK�A�ȈՌf���i�R�s�y�j

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

// �ȉ����ǉ�����

// ���y�����K

Route::get('another', function(){
  return 'This is another way to go.';
});


Route::get('myview', function(){
    $name = 'Dick Choi';
    return View::make('myFirstView')->with('name',$name);
});


Route::get('myview', 'MyController@show');


//���ȈՌf���̍쐬(�R�s�y)

// ���eform��\������
Route::get('posts/create', 'PostController@create');

// ���ۂ�DB�Ƀf�[�^������
Route::post('posts', 'PostController@store');

// ���ׂĂ�Post��\������
Route::get('posts', 'PostController@index');

// ���Post��\������B
Route::get('posts/{postid}','PostController@show');

*/



// //���ȈՌf���̍쐬(���吧��)

// ���e�E�폜�E�ҏWform�Ɠ��e�̕\��
Route::get('boards', 'BoardController@index');

// ���e
Route::post('boards', 'BoardController@store');

// �폜
Route::post('boards/delete', 'BoardController@destroy');

// �ҏW
Route::post('boards/edit', 'BoardController@edit');

// �X�V
Route::post('boards/update', 'BoardController@update');
