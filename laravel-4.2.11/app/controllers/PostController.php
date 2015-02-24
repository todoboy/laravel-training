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
}