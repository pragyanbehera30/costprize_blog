<?php
/**
 
 * User: Swapna
 * Date: 18/9/14
 * Time: 11:05 AM
 */


class index_Controller extends Base_Controller
{
    public $restful = true;
    public function get_index()
    {
        return View::make('home.index');
    }
} 