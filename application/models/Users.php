<?php

/**
 * User: Dileep DV
 * Date: 21/9/14
 * Time: 9:01 PM
 */
class Users extends Eloquent
{
    public static $table = 'users';

    public function postAll($inputs)
    {
        $check = DB::table('users')
            ->where('email', '=', $inputs ["email"])
            ->get();
        if (!$check) {
            $data = Users::create(
                array(
//                'username' => $inputs["username"],
                'password' => $inputs["password"],
                    'email' => $inputs["email"],
//                    'password' => Hash::make('$inputs["password"]'),
//                'phone' => $inputs["phone"],
//                'usertype' => $inputs["usertype"]
                )
            );
            return $data;
        } else {
            echo('User already exists..!!!');
        }
    }

} 