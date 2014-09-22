<?php
/**
 * User: Dileep DV
 * Date: 20/9/14
 * Time: 3:32 PM
 */

class Register_Controller extends Base_Controller {
    public $restful =  true;

    public function get_index(){
        return View::make('home.register');
    }

    public function post_registeruser(){
//        dd(345);
        $inputs = Input::all();
//        dd($inputs);
        $rules = array(
//            'username' => 'required|min:3|max:30',
            'email' => 'required|min:3|max:30',
            'password' => 'required|min:3|max:30',
//            'phone' => 'required|min:3|max:10',
//            'usertype' => 'required',
        );
        $validation = Validator::make($inputs, $rules);

        if ($validation->fails()) {
            return Redirect::to('register')
                ->with('errors', $validation->errors->all());
        } else {
            $obj= new Users();
            $obj->postAll($inputs);
            return Redirect::to('register')
                ->with('success', 'Account Created Successfully.');
        }
    }

} 