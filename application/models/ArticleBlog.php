<?php
/**
 
 * User: Swapna
 * Date: 20/9/14
 * Time: 4:33 PM
 */
class ArticleBlog extends Eloquent
{
    public static $table = 'aba_articleinfo';
    public function postAll($inputs)
    {
        $table = ArticleBlog::create(
            array(
                'AI_Title' => $inputs["article_title"],
                'AI_Author' => $inputs["author_name"],
                'AI_Desc' => $inputs["description"]
            )
        );
        return $table;
    }
//    delete blog
    public function deletedata($inputs)
    {
//        dd($inputs);
        $table = DB::table('aba_articleinfo')->where('AI_ID', '=', $inputs)->delete();
        return $table;
    }
//    edit blog
    public function postArticle($inputs)
    {

        DB::table('aba_articleinfo')
            ->where('AI_ID', '=', $inputs ["article_id"])
            ->update(array('AI_Title' => $inputs["article_title"],
                    'AI_Author' => $inputs["author_name"],
                    'AI_Desc' => $inputs["description"])
            );
    }
    public static function getById($id)
    {
        $article = ArticleBlog::where('AI_ID', '=', $id)->first();
        return $article;
    }
//    display blog
    public function getAll()
    {
        DB::table('aba_articleinfo')->get();
//        return DisplayBlog::all();
    }
}
