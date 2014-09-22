<?php
/**
 * User: Dileep DV
 * Date: 21/9/14
 * Time: 9:01 PM
 */

class Users extends Eloquent{
    public static $table = 'users';

    public function postAll($inputs)
    {
        $data = Users::create(
            array(
//                'username' => $inputs["username"],
                'password' => $inputs["password"],
                'email' => $inputs["email"],
//                'phone' => $inputs["phone"],
//                'usertype' => $inputs["usertype"]
            )
        );
        return $data;

    }
} 