@extends('layouts.master')

@section('title')
Edit {{$post->title}} - laravel-4.2.11
@stop

@section('body')
{{Form::open(['route'=>['posts.update',$post->id],'method'=>'PUT'])}}
    {{Form::label('title', 'Title')}}<br>
    {{Form::text('title', $post->title)}}<br>
    {{Form::label('body', 'Body')}}<br>
    {{Form::textarea('body', $post->body)}}<br>
    {{Form::submit('Submit')}}
{{Form::close()}}
@stop