<?php


namespace Core\Patterns\Strategy\Time;


class ExplicitDate implements Time
{

    public function show(): string
    {
        return date("F j, Y, g:i a");
    }
}