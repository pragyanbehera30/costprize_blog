<?php
/**
 * User: Pragyan
 * Author: Pragyan
 * Date: 16/9/14
 * Time: 4:55 PM
 */
class Home extends Eloquent
{
    public static $table = 'aba_articleinfo';

    public function getAll()
    {
        DB::table('aba_articleinfo')->get();
        return Home::all();
    }

} 