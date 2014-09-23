<?php

/**
 * User: Pragyan
 * Author: Pragyan
 * Date: 23/9/14
 * Time: 4:23 PM
 */
class ResetPassword extends Eloquent
{
    public static $table = 'users';

    public function postAll($inputs)
    {

        $table = DB::table('users')
            ->where('email', '=', $inputs ["id"])
            ->update(array('password' =>  Hash::make($inputs["password"]))
            );
        if ($table) {
            return true;
        } else {
            return false;
        }
    }

    public static function getById($id)
    {
        $val = ResetPassword::where('id', '=', $id)->first();
        return $val;
    }
}