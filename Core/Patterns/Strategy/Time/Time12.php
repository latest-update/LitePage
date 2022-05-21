<?php


namespace Core\Patterns\Strategy\Time;


class Time12 implements Time
{

    public function show(): string
    {
        return date("g:i a");
    }
}