<?php


namespace App\Controllers;

use Core\Patterns\Strategy\Time\Context;
use Core\Patterns\Strategy\Time\ExplicitDate;
use Core\Patterns\Strategy\Time\Time12;
use Core\Patterns\Strategy\Time\Time24;
use Core\Patterns\Strategy\Time\TimeCustom;
use Core\Patterns\Strategy\Time\TimeSQL;
use Core\Workflow\Workflow;

class IndexController implements Workflow
{
    public function show(): string
    {
        $time = new Context(new ExplicitDate());
        println( $time->showTime() );

        $time->setTime(new Time12());
        println( $time->showTime() );

        $time->setTime(new Time24());
        println( $time->showTime() );

        $time->setTime(new TimeSQL());
        println( $time->showTime() );

        $time->setTime(new TimeCustom());
        println( $time->showTime() );

        return '';
    }
}