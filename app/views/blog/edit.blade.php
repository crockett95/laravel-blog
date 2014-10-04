@extends('layouts.blog')

@section('title')
    New Blog Post
@stop

@section('header')
    <h1 class="page-header">Create a new post</h1>
@stop

@section('content')
    <div class="container"><div class="row"><div class="col-md-10 col-md-offset-1">
        {{ Form::open(['route' => 'posts.store']) }}
            <div class="form-group">
                {{ Form::label('title', 'Post Title') }}
                {{ Form::text('title', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('content', 'Post') }}
                {{ Form::textarea('content', null, ['id' => 'editor', 'class' => 'form-control', 'rows' => 10]) }}
            </div>
            {{ Form::hidden('author', $user->id) }}
            {{ Form::button('Save', ['type' => 'submit', 'class' => 'btn btn-lg btn-primary btn-block']) }}
        {{ Form::close() }}
    </div></div></div>
@stop

@section('styles')
    @parent
    {{ HTML::style('assets/bower_components/froala-wysiwyg/css/froala_editor.min.css') }}
    {{ HTML::style('assets/bower_components/froala-wysiwyg/css/themes/dark.min.css') }}
@stop

@section('scripts')
    @parent
    {{ HTML::script('assets/bower_components/froala-wysiwyg/js/froala_editor.min.js') }}
    <script>
         $('#editor').editable({inlineMode: false, height: 500, theme: "dark"});
    </script>
@stop
