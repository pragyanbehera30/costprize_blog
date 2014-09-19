<?php

/**
 * User: Pragyan
 * Author: Pragyan
 * Date: 18/9/14
 * Time: 8:37 PM
 */
class DisplayBlog extends Eloquent
{
    public static $table = 'aba_articleinfo';

    public function getAll()
    {
        DB::table('aba_articleinfo')->get();
//        return DisplayBlog::all();
    }
}