<?php
/**
 * User: Pragyan
 * Author: Pragyan
 * Date: 16/9/14
 * Time: 4:55 PM
 */

class Home extends Eloquent
{
    public static $table = 'article_user';

    public function getAll()
    {
        DB::table('article_user')->get();
        return Home::all();
    }

} 