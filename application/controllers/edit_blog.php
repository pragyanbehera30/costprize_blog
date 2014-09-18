<?php
/**
 
 * User: Swapna
 * Date: 18/9/14
 * Time: 3:33 PM
 */

class Edit_blog_Controller extends Base_Controller
{
    public $restful = true;
    public function get_index($id)
    {
        $article = Update::getById($id);
        return View::make('home.edit_blog')
            ->with('article_data', $article);
    }
    public function post_index()
    {
        $input = Input::all();
//        dd($input);
        $rules = array(
            'name' => 'required|max:25|min:5'
        );
        $validation = Validator::make($input, $rules);
        if ($validation->fails()) {
            return Redirect::to('edit_blog')
                ->with('message_errors', $validation->errors->all())
                ->with_input();
        }
        else
        {
            $UPDATE = new Update();
            $UPDATE ->updateBlog($input);
            return Redirect::to('edit_blog')
                ->with('message_success', 'Updated Successfully');
        }
//        dd($validation);
    }
}