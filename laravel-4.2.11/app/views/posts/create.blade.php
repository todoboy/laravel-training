@extends('layouts.master')

@section('title')
Create a new post - laravel-4.2.11
@stop

@section('body')
{{Form::open(['url'=>'posts','method'=>'post'])}}
    {{Form::label('title', 'Title')}}<br>
    {{Form::text('title')}}<br>
    {{Form::label('body', 'Body')}}<br>
    {{Form::textarea('body')}}<br>
    {{Form::submit('Submit')}}
{{Form::close()}}
@stop