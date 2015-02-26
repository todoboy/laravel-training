@extends('layouts.master')

@section('title')
{{$post->title}} - laravel-4.2.11
@stop

@section('body')
<h1>{{$post->title}}</h1>
<p>{{$post->body}}</p>
<a href="./">back to list</a>
@stop