@extends('layouts.master')

@section('title')
簡易掲示板
@stop

@section('body')
<h1>簡易掲示板</h1>
{{Form::open(['url'=>'boards','method'=>'post'])}}
    {{Form::label('name', '名前')}}
    {{Form::text('name')}}
    {{Form::label('comment', 'コメント')}}
    {{Form::text('comment')}}
    {{Form::submit('投稿')}}
{{Form::close()}}
<br>
{{Form::open(['url'=>'boards/delete','method'=>'post'])}}
    {{Form::label('article_number', '記事番号（半角）')}}
    {{Form::text('article_number')}}
    {{Form::submit('削除')}}
{{Form::close()}}
<br>
{{Form::open(['url'=>'boards/edit','method'=>'post'])}}
    {{Form::label('article_number', '記事番号（半角）')}}
    {{Form::text('article_number')}}
    {{Form::submit('編集')}}
{{Form::close()}}
<ul>
   @foreach($posts as $post)
   <p>{{$post->id}}, {{$post->name}} ({{$post->comment}}) -{{$post->created}} </p>
    @endforeach
</ul>
@stop