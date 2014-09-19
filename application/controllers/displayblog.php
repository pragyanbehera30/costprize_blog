<?php
/**
 * User: Pragyan
 * Author: Pragyan
 * Date: 18/9/14
 * Time: 8:36 PM
 */

class displayblog_Controller extends Base_Controller {

    public $restful = true;
    public function get_index()
    {
        $obj = new DisplayBlog();
//        dd($obj);
        $qwe = $obj::all();
        return View::make('home.displayblog')
            ->with('Pragyans', $qwe);
    }

}