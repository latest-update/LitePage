<?php


namespace Core\Http;


class Http
{
    /*
     * Starting line
     */
    public static string $method;
    public static string $path;
    public static string $version;
    public static $_input_data;

    /*
     * Headers
     */
    public static array $headers;

    /*
     * All
     */
    public static array $all;

    public static function init() : void
    {
        self::$method = $_SERVER['REQUEST_METHOD'];
        self::$path = $_SERVER['REQUEST_URI'];
        self::$version = $_SERVER['SERVER_PROTOCOL'];
        self::$headers = array_merge(getallheaders(), headers_list());
        self::$all = $_SERVER;
        self::init_data();
    }

    public static function addHeader(string $key, string $value)
    {
        header("$key: $value");
    }

    private static function init_data() : void
    {
        $method = '$_' . self::$method;
        self::$_input_data = $method;
    }

}