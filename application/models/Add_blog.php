<?php

/**
 * User: Swapna
 * Date: 18/9/14
 * Time: 3:55 PM
 */
class Create extends Eloquent
{
    public static $table = "blog_user";

    public function createBlog($input)
    {
        DB::table('blog_user')->insert(
            array(
                'name' => $input['name'],
                'msg' => $input['b_msg']
            )
        );
    }

}