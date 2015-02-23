<?php

class MyController extends BaseController{
    function show(){
        $name = 'Junpei Simotsu';
        return View::make('myFirstView')->with('name',$name);
    }
}