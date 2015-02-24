<?php

class PostController extends BaseController{
    function create(){
        return View::make('posts.create');
    }
    function store(){
        DB::table('posts')->insert([
            'title'=>Input::get('title'),
            'body'=>Input::get('body')
        ]);
        return 'Successfully done!';
    }
    function index(){
        $posts = DB::table('posts')->get();
        return View::make('posts.index')->with('posts', $posts);
    }    
}