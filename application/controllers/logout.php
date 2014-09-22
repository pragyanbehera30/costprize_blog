<?php
/**
 * User: Pragyan
 * Author: Pragyan
 * Date: 22/9/14
 * Time: 11:01 AM
 */

class logout_controller extends Base_Controller {
    public $restful = true;
    public function get_index()
    {
        Auth::logout();
        return View::make('home.login');

    }
}