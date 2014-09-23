<?php

/**
 * User: Pragyan
 * Author: Pragyan
 * Date: 22/9/14
 * Time: 2:19 PM
 */
class resetpassword_Controller extends Base_Controller
{
    public $restful = true;

    public function get_index()
    {  $id= Auth::User()->email;
        $val = ResetPassword::getById($id);

        return View::make('home.resetpassword')
           ->with('id',$id);
    }

    public function post_index()
    {
        $inputs = Input::all();

//        dd($inputs);
        $rules = array(
            'old_password' => 'required|min:3',
            'password' => 'required|same:password_confirmation',
            'password_confirmation'=>'required|min:3'
        );
        $validator = Validator::make($inputs, $rules);
        if ($validator->fails()) {
            dd($validator->errors->all());
            return Redirect::to('resetpassword')
                ->with('errors', 'Enter Correct password!');
        } else {
            $obj= new ResetPassword();

            $obj->postAll($inputs);
            return Redirect::to('admin')
                ->with('success', 'Password Changed Successfully!');
        }
    }
}