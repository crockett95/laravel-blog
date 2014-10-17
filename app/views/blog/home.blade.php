@extends('layouts.blog')

@section('title')
    {{-- expr --}}
    Clean Blog
@stop

@section('header')
    {{-- expr --}}
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="site-heading">
                <h1>Clean Blog</h1>
                <hr class="small">
                <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
            </div>
        </div>
    </div>
@stop

@section('content')
    {{-- expr --}}
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @forelse ($posts as $post)
                    {{-- expr --}}
                    <div class="post-preview">
                        <a href="{{ URL::route('posts.show', $post->id) }}">
                            <h2 class="post-title">
                                {{{ $post->title }}}
                            </h2>
                        </a>
                        <p class="post-meta">{{{ $post->author->name }}} on {{{ $post->created_at->toDayDateTimeString() }}}</p>
                    </div>
                    <hr>
                @empty
                    {{-- empty expr --}}
                    <div class="post-preview">
                        <h2 class="post-title">
                            There are no Posts
                        </h2>
                        <p class="post-meta">We're sorry</p>
                    </div>
                    <hr>
                @endforelse
                <!-- Pager -->
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@stop
