<?php
/**
 * User: Pragyan
 * Author: Pragyan
 * Date: 18/9/14
 * Time: 4:00 PM
 */

class description_Controller extends Base_Controller
{
    public $restful = true;
    public function get_index()
    {
        return View::make('home.description');
    }
} 