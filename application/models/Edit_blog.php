<?php
/**
 * User: Swapna
 * Date: 18/9/14
 * Time: 3:56 PM
 */
class Update extends Eloquent
{
    public static $table = 'blog_user';
    public function updateBlog($input)
    {
//        dd($input);
        DB::table('blog_user')
            ->where('id', '=', $input["id"])
            ->update(array('name' => $input["name"],
                'msg' => $input["b_msg"]));
    }
    public static function getById($id)
    {
        $article = Update::where('id', '=', $id)->first();
        return $article;
    }
}