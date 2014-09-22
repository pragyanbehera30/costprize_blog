<?php
/**
 * User: Dileep DV
 * Date: 21/9/14
 * Time: 9:01 PM
 */

class User extends Eloquent{
    public static $table = 'user';

    public function postAll($inputs)
    {
        $data = User::create(
            array(
                'username' => $inputs["username"],
                'password' => $inputs["password"],
                'email' => $inputs["email"],
                'phone' => $inputs["phone"],
                'usertype' => $inputs["usertype"]
            )
        );
        return $data;

    }
} 