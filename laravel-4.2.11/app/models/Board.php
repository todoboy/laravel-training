<?php

class Board extends Eloquent{
    protected $table = 'boards';

    protected $fillable = ['name', 'comment', 'created'];

    public $timestamps = false;
}