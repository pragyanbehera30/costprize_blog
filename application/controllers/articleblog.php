<?php
/**
 
 * User: Swapna
 * Date: 20/9/14
 * Time: 4:16 PM
 */

class articleblog_Controller extends Base_Controller
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
            'description' => 'required|min:5'
        );
        $validation = Validator::make($inputs, $rules);

        if ($validation->fails()) {
            return Redirect::to('addblog')
                ->with('errors', $validation->errors->all());
        } else {
            $obj= new ArticleBlog();
            $obj->postAll($inputs);
            return Redirect::to('addblog')
                ->with('success', 'Created Successfully.');
        }
    }
    public function get_display()
    {
        $obj = new ArticleBlog();
        $qwe = $obj::all();
        return View::make('home.displayblog')
            ->with('Pragyans', $qwe);
    }

    public function get_editarticle($id)
    {
        $article = ArticleBlog::getById($id);
        return View::make('home.editblog')
            ->with('article_data',$article);
    }
    public function post_editarticle()
    {
        $inputs = Input::all();

        $rules = array(
            'article_title' => 'required|min:3',
            'author_name' => 'required|min:3',
            'description' => 'required|min:5'
        );
        $validation = Validator::make($inputs, $rules);

        if ($validation->fails()) {
            return Redirect::to('editblog')
                ->with('errors', $validation->errors->all());
        }
        else
        {
            $obj= new ArticleBlog();
            $obj->postArticle($inputs);
            return Redirect::to('displayblog')
                ->with('success', 'Data Updated Successfully.');
        }
    }


    public function get_deletedata($id)
    {

        $obj = new ArticleBlog();
        $obj->deletedata($id);
        return Redirect::to('displayblog')
            ->with('success', ' Data Deleted Successfully.');
    }
}