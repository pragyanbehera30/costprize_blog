<?php
/**
 * User: Pragyan
 * Author: Pragyan
 * Date: 18/9/14
 * Time: 7:34 PM
 */
class index_Controller extends Base_Controller
{
    public $restful = true;
    public function get_index()
    {
        return View::make('home.index');
    }
} 