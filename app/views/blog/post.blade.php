@extends('layouts.blog')

@section('title')
    Blog: {{{ $post->title }}}
@stop

@section('header')
    <header class="page-header">
        <h1>{{{ $post->title }}}</h1>
        <h2 class="small">Posted by {{{ $post->author->name }}} on {{{ $post->created_at->toDayDateTimeString() }}}</h2>
    </header>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                {{ $post->body }}
            </div>
        </div>
    </div>
@stop
