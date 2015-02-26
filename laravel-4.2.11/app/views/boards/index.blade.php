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
        </form>
<ul>
   @foreach($posts as $post)
   <p>{{$post->id}}, {{$post->name}} ({{$post->comment}}) </p>
    @endforeach
</ul>
@stop