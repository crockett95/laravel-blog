@extends('layouts.auth')

{{-- Page Title --}}
@section('title')
    Sign In
@stop

{{-- Form Title --}}
@section('form-title')
    Please Sign In
@stop

{{-- Form Markup --}}
@section('form')
    {{ Form::open(['route' => 'login.submit']) }}
        <fieldset>
            <div class="form-group">
                {{ Form::label('username', 'Username', ['class' => 'sr-only']) }}
                {{ Form::text('username', null,
                    ['class' => 'form-control', 'placeholder' => 'Username', 'autofocus']) }}
            </div>
            <div class="form-group">
                {{ Form::label('password', 'Password', ['class' => 'sr-only']) }}
                {{ Form::password('password',
                    ['class' => 'form-control', 'placeholder' => 'Password']) }}
            </div>
            <div class="checkbox">
                <label>
                    {{ Form::checkbox('remember', 1, null) }} Remember Me
                </label>
            </div>
            {{ Form::submit('Login', ['class' => 'btn btn-lg btn-success btn-block']) }}
        </fieldset>
    {{ Form::close() }}
@stop
