@extends('layouts.master')

@section('title')
Posts list - laravel-4.2.11
@stop

@section('body')
<h1>Posts list <a href="./posts/create">create a new post</a></h1>
<ul>
    @foreach($posts as $post)
    <h2><a href="./posts/{{$post->id}}">
        {{$post->title}}</a></h2>
    <p>{{$post->body}}</p>
    @endforeach
</ul>
@stop