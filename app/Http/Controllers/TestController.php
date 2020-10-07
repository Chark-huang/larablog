<?php


namespace App\Http\Controllers;


class TestController extends Controller
{
    public function cache($name)
    {
        return cache()->put('heihei','Hello Redis');
    }

    public function get()
    {
        return cache()->get('heihei');
    }
}
