<?php


namespace Core\Patterns\Strategy\Time;


class TimeCustom implements Time
{

    public function show(): string
    {
        $secs = time();
        $bit = array(
            ' year'        => $secs / 31556926 % 12,
            ' week'        => $secs / 604800 % 52,
            ' day'        => $secs / 86400 % 7,
            ' hour'        => $secs / 3600 % 24,
            ' minute'    => $secs / 60 % 60,
            ' second'    => $secs % 60
        );

        foreach($bit as $k => $v){
            if($v > 1) $ret[] = $v . $k . 's';
            if($v == 1) $ret[] = $v . $k;
        }

        $ret[] = 'ago.';

        return join(' ', $ret);
    }
}