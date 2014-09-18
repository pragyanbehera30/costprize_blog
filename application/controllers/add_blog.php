<?php

/**
 * User: Swapna
 * Date: 17/9/14
 * Time: 6:08 PM
 */
class Add_blog_Controller extends Base_Controller
{
    public $restful = true;

    public function get_index()
    {
        return View::make('home.add_blog');
    }

    public function post_index()
    {
        $input = Input::all();
        $rules = array(
            'name' => 'required|max:35|min:5',
//            'email' => 'required|email',
        );
        $validation = Validator::make($input, $rules);
        if ($validation->fails()) {
            return Redirect::to('/')
                ->with('message_errors', $validation->errors->all())
                ->with_input();
        } else {
            $CREATE = new Create();
            $CREATE->createBlog($input);
            return Redirect::to('/')
                ->with('message_success', 'Successful Creation');
        }
    }
} 