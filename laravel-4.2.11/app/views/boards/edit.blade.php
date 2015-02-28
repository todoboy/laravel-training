@extends('layouts.master')

@section('title')
Edit {{$post->title}} - laravel-4.2.11
@stop

@section('body')
<h1>編集欄</h1>
{{Form::open(['url'=>'boards/update','method'=>'post'])}}
    {{Form::label('name', '名前')}}
    {{Form::text('name', $post->name)}}
    {{Form::label('comment', 'コメント')}}
    {{Form::text('comment', $post->comment)}}
    {{Form::hidden('edit_number', $post->id)}}
    {{Form::submit('更新')}}
{{Form::close()}}
@stop


