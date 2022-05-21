<?php


namespace Core\Route;


use Core\Http\Http;
use Core\Route\Structure\Dissection;

class Route
{

    public static function get($url, $callback)
    {
        if( Dissection::instance()->compare($url) and Http::$method == 'GET' )
            print call_user_func_array($callback, $_GET);
    }

    public static function post($url, $callback)
    {
        if( Dissection::instance()->compare($url) and Http::$method == 'POST' )
            print call_user_func_array($callback, $_POST);
    }


}