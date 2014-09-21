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

    public function post_index(){
        $inputs = Input::all();
        dd($inputs);
        $rules = array(
            'article_title' => 'required|min:3',
            'author_name' => 'required|min:3',
        );
        $validation = Validator::make($inputs, $rules);

        if ($validation->fails()) {
            return Redirect::to('addblog')
                ->with('errors', $validation->errors->all());
        } else {
            $obj= new Register();
            $obj->postAll($inputs);
            return Redirect::to('addblog')
                ->with('success', 'Account Created Successfully.');
        }
    }

} 