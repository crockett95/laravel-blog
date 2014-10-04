<?php

class LoginController extends BaseController {

    public function getLogin()
    {
        return View::make('auth.login');
    }

    public function postLogin()
    {
        $userinfo = [
            'username' => Input::get('username'),
            'password' => Input::get('password')
        ];
        $remember = Input::get('remember');
        if ( Auth::attempt($userinfo, $remember) )
        {
            return Redirect::intended('home')->with('success', 'You have been logged in');
        }
        else
        {
            return Redirect::to('login')->with('error', 'Username or password didn\'t work');
        }
    }

    public function postLogout()
    {
        Auth::logout();
        return Redirect::to(Input::get('url'))->with('success', 'You have been logged out');
    }

}
