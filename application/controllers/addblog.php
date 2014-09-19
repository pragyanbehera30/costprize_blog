<?php
class addblog_Controller extends Base_Controller
{

    public $restful = true;

    public function get_index()
    {
        return View::make('home.addblog');
    }

    public function post_index()
    {
        $inputs = Input::all();

        $rules = array(
            'article_title' => 'required|min:3',
            'author_name' => 'required|min:3',
        );
        $validation = Validator::make($inputs, $rules);

        if ($validation->fails()) {
            return Redirect::to('addblog')
                ->with('errors', $validation->errors->all());
        } else {
            $obj= new AddBlog();
            $obj->postAll($inputs);
            return Redirect::to('addblog')
                ->with('success', 'Created Successfully.');


        }
    }
}
//class Add_blog_Controller extends Base_Controller
//{
//    public $restful = true;
//
//    public function get_index()
//    {
//        return View::make('home.add_blog');
//    }
//
//    public function post_index()
//    {
//        $input = Input::all();
//        $rules = array(
//            'name' => 'required|max:35|min:5',
////            'email' => 'required|email',
//        );
//        $validation = Validator::make($input, $rules);
//        if ($validation->fails()) {
//            return Redirect::to('/')
//                ->with('message_errors', $validation->errors->all())
//                ->with_input();
//        } else {
//            $CREATE = new Create();
//            $CREATE->createBlog($input);
//            return Redirect::to('/')
//                ->with('message_success', 'Successful Creation');
//        }
//    }
//}