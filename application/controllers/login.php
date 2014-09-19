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
//
//        $rules = array(
//            'AI_Username' => Input::get(),
//            'AI_Password' => Input::get()
//        );
//        $validation = Validator::make($inputs, $rules);
//
//        if ($validation->fails()) {
//            return Redirect::to('login')
//                ->with('errors', $validation->errors->all());
//        } else {
//            $obj = new Login();
//            $obj->postAll($inputs);
            return Redirect::to('admin')
                ->with('success', 'You Are Logged In As Admin.');

        }
//    }
}
