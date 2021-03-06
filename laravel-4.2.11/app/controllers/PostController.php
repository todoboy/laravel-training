<?php

class PostController extends BaseController{
    function create(){
        return View::make('posts.create');
    }
    function store(){
        Post::create(Input::all());
        return Redirect::to('posts');
    }
    function index(){
        $posts = Post::all();
        return View::make('posts.index')->with('posts', $posts);
    }
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
}