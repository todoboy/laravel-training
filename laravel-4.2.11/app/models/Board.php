<?php

class Board extends Eloquent{
    protected $table = 'boards';

    protected $fillable = ['id', 'name', 'comment', 'created'];

    public $timestamps = false;
}