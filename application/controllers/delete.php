<?php
/**
 * User: Pragyan
 * Author: Pragyan
 * Date: 18/9/14
 * Time: 7:55 PM
 */

class delete_Controller extends Base_Controller
{

    public $restful = true;

    public function get_index($id)
    {
        return View::make('home.delete')
            ->with('article_id',$id);
    }

    public function post_index()
    {
        $inputs = Input::all();
        $obj = new Delete();
        $obj->postAll($inputs);
        return Redirect::to('displayblog')
            ->with('success', ' Data Deleted Successfully.');
    }
}