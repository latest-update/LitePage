<?php


namespace Core\Patterns\Singleton;


trait Singleton
{
    private static array $instance = [];

    final private function __construct() {}

    final public static function instance()
    {
        $calledClass = get_called_class();

        if(!isset(static::$instance[$calledClass]))
            static::$instance[$calledClass] = new $calledClass();

        return static::$instance[$calledClass];
    }

}