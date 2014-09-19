<?php
class editblog_Controller extends Base_Controller
{

    public $restful = true;

    public function get_index($id)
    {
        $article = EditBlog::getById($id);

        return View::make('home.editblog')
            ->with('article_data',$article);
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
            return Redirect::to('displayblog')
                ->with('errors', $validation->errors->all());
        } else {
            $obj= new EditBlog();
            $obj->postAll($inputs);
            return Redirect::to('displayblog')
                ->with('success', 'Data Updated Successfully.');


        }
    }
}
//class Edit_blog_Controller extends Base_Controller
//{
//    public $restful = true;
//    public function get_index($id)
//    {
//        $article = Update::getById($id);
//        return View::make('home.edit_blog')
//            ->with('article_data', $article);
//    }
//    public function post_index()
//    {
//        $input = Input::all();
////        dd($input);
//        $rules = array(
//            'name' => 'required|max:25|min:5'
//        );
//        $validation = Validator::make($input, $rules);
//        if ($validation->fails()) {
//            return Redirect::to('edit_blog')
//                ->with('message_errors', $validation->errors->all())
//                ->with_input();
//        }
//        else
//        {
//            $UPDATE = new Update();
//            $UPDATE ->updateBlog($input);
//            return Redirect::to('edit_blog')
//                ->with('message_success', 'Updated Successfully');
//        }
////        dd($validation);
//    }
//}