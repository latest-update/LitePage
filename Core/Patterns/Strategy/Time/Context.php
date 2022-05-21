<?php


namespace Core\Patterns\Strategy\Time;


class Context
{
    private Time $time;

    public function __construct(Time $time)
    {
        $this->time = $time;
    }

    public function setTime(Time $time)
    {
        $this->time = $time;
    }

    public function showTime (): string
    {
        return $this->time->show();
    }
}