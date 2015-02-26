@extends('layouts.master')

@section('title')
Create a new post - laravel-4.2.11
@stop

@section('body')
<form method="post" action="../posts">
    <label for="title">title</label><br>
    <input type="text" name="title"><br>
    <label for="body">body</label><br>
    <textarea name="body"></textarea><br>
    <button type="submit">submit</button>
</form>
@stop