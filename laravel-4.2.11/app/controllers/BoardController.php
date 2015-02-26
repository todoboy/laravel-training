<?php

class BoardController extends BaseController{
/*
    function create(){
        return View::make('posts.create');
    }
*/
    function store(){
        Board::create(Input::all());
        return Redirect::to('boards');
    }
    function index(){
        $posts = Board::all();
        return View::make('boards.index')->with('posts', $posts);
    }
/*
    function show($postid){
        $post = Post::find($postid);
        return View::make('posts.show')->with('post', $post);
    }
    function edit($postid){
        $post = Post::find($postid);
        return View::make('posts.edit')->with('post', $post);
    }
    function update($postid){
        $post = Post::find($postid);
        $post->fill(Input::all());
        $post->save();
        return Redirect::route('posts.show',[$postid]);
    }
    function destroy($postid){
        Post::find($postid)->delete();
        return Redirect::route('posts.index');
    }
*/
}