<?php

class BoardController extends BaseController{

    function store(){
        Board::create(Input::all());
        return Redirect::to('boards');
    }
    function index(){
        $posts = Board::all();
        return View::make('boards.index')->with('posts', $posts);
    }
    function destroy(){
        $delete_id = Board::find(Input::get('article_number'))->delete();
        return Redirect::to('boards');
    }
    function edit(){
        $post = Board::find(Input::get('article_number'));
        return View::make('boards.edit')->with('post', $post);
    }
    
    function update(){
        $post = Board::find(Input::get('edit_number'));
        $post->fill(Input::all());
        $post->save();
        return Redirect::to('boards');
    }
}