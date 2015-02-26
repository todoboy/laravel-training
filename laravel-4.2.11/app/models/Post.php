<?php

class Post extends Eloquent{
    protected $table = 'posts';

    protected $fillable = ['title', 'body'];

    public $timestamps = false;
}