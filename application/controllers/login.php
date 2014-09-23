<?php
/**
 * User: Pragyan
 * Author: Pragyan
 * Date: 18/9/14
 * Time: 12:23 PM
 */
class login_Controller extends Base_Controller
{

    public $restful = true;

    public function get_index()
    {
        return View::make('home.login');
    }

    public function post_index()
    {
        $inputs = Input::all();
        $credentials = array(
            'username' => $inputs['username'],
            'password' => $inputs['password']
        );
        Auth::attempt($credentials);
        if (Auth::check()) {
            return Redirect::to('admin')
                ->with('success', 'You Are Logged In As Admin.');
        } else {
            return Redirect::to('login')
                ->with('errors', 'Username Or Password Incorrect!');
        }

    }

}

