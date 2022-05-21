<?php


namespace Core\Workflow;


use Exception;

class Controller
{
    protected static function create(string $controller)
    {
        $controller = CONTROLLERS_PATH . $controller;

        return new $controller();
    }

    public static function handle (array $controller, array $data = null) : string
    {
        $workflow = static::create($controller[0]);

        $method = $controller[1];

        return $workflow->$method($data);
    }
}