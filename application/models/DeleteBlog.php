<?php
/**
 * User: Pragyan
 * Author: Pragyan
 * Date: 18/9/14
 * Time: 7:54 PM
 */
class DeleteBlog extends Eloquent
{
    public static $table = 'aba_articleinfo';


    public function postAll($inputs)
    {
        $table = DB::table('aba_articleinfo')->where('AI_ID', '=', $inputs ["article_id"])->delete();
        return $table;
    }

    public static function getById($id)
    {
        $article = DeleteBlog::where('AI_ID', '=', $id)->first();
        return $article;

    }
}