<?php
class EditBlog extends Eloquent
{
    public static $table = 'aba_articleinfo';

    public function postAll($inputs)
    {

        DB::table('aba_articleinfo')
            ->where('AI_ID', '=', $inputs ["article_id"])
            ->update(array('AI_Title' => $inputs["article_title"],
                'AI_Author' => $inputs["author_name"]));

    }

    public static function getById($id)
    {
        $article = EditBlog::where('AI_ID', '=', $id)->first();
        return $article;
    }
}
//class Update extends Eloquent
//{
//    public static $table = 'blog_user';
//    public function updateBlog($input)
//    {
////        dd($input);
//        DB::table('blog_user')
//            ->where('id', '=', $input["id"])
//            ->update(array('name' => $input["name"],
//                'msg' => $input["b_msg"]));
//    }
//    public static function getById($id)
//    {
//        $article = Update::where('id', '=', $id)->first();
//        return $article;
//    }
//}