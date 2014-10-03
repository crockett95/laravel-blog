<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['uses' => 'HomeController@showWelcome', 'as' => 'home']);

Route::resource('posts', 'PostsController');

Route::get('/login', [
    'uses' => 'LoginController@getLogin',
    'as' => 'login.show'
]);
Route::post('/login', [
    'before' => 'csrf',
    'uses' => 'LoginController@postLogin',
    'as' => 'login.submit'
]);
Route::post('/logout', [
    'before' => 'csrf|auth',
    'uses' => 'LoginController@postLogout',
    'as' => 'logout'
]);

