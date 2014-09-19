<?php

class AddBlog extends Eloquent
{
    public static $table = 'aba_articleinfo';

    public function postAll($inputs)
    {

        $table = AddBlog::create(
            array(
                'AI_Title' => $inputs["article_title"],
                'AI_Author' => $inputs["author_name"]
            )
        );
        return $table;

    }
}
//class Create extends Eloquent
//{
//    public static $table = "blog_user";
//
//    public function createBlog($input)
//    {
//        DB::table('blog_user')->insert(
//            array(
//                'name' => $input['name'],
//                'msg' => $input['b_msg']
//            )
//        );
//    }
//
//}