<?php
/**
 
 * User: Swapna
 * Date: 17/9/14
 * Time: 6:08 PM
 */

class Edit_blog_Controller extends Base_Controller
{
    public $restful = true;
    public function get_index()
    {
        return View::make('home.edit_blog');
    }
} 