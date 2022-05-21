<?php


namespace Core\Patterns\Strategy\Time;


class Time24 implements Time
{

    public function show(): string
    {
        return date("H:i");
    }
}