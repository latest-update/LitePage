<?php


namespace Core\Patterns\Strategy\Time;


class TimeSQL implements Time
{

    public function show(): string
    {
        return date("Y-m-d H:i:s");
    }
}